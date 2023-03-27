<?php
/*! CloudTables API client
 * ©SpryMedia Ltd - MIT licensed
 */

namespace Cloudtables;

class Api {
	private $_domain = 'cloudtables.io';
	private $_duration = null;
	private $_key;
	private $_roles = [];
	private $_secure = false;
	private $_subdomain;
	private $_clientId = null;
	private $_clientName = null;
	private $_accessToken = null;
	private $_conditions = null;
	private $_ssl = true;

	/**
	 * Create a CloudTables API class instance
	 * @param string Cloud: Subdomain. Self-hosted: API key
	 * @param mixed Cloud: API key. Self-hosted: Options
	 * @param array Cloud: Options [
	 *   'domain' => 'cloudtables.io', // Domain that the API should interface with (prefixed with the application id)
	 *   'duration' => 3600, // Token expire duration
	 *   'roles' => [], // Array of roles (union'ed with the roles for the API key)
	 *   'role' => null, // Single role (takes priority over `roles` if both used)
	 *   'secure' => true, // true for strict ssl certificates, false for self-signed
	 *   'clientId' => null, // Your unique identifier for the user
	 *   'clientName' => null, // Name / label to give the use in the CloudTables configuration UI
	 *   'conditions' => null, // Conditions to apply to the data to fetch
	 *   'ssl' => true, // Use https (default) or http (when set to `false`) for connections.
	 * ]
	 */
	function __construct($a, $b, $c = null) {
		if (! function_exists('curl_init')) {
			throw new Exception('curl is not installed in your PHP server. Please install curl for your PHP server to be able to use the CloudTables API.');
		}

		if (is_string($b)) {
			// Cloud
			$subdomain = $a;
			$key = $b;
			$options = $c;
		}
		else {
			// Self hosted
			$subdomain = '';
			$key = $a;
			$options = $b;
		}

		$this->_key = $key;
		$this->_subdomain = $subdomain;

		if ($options && isset($options['domain'])) {
			$this->_domain = $options['domain'];
		}

		if ($options && isset($options['duration'])) {
			$this->_duration = $options['duration'];
		}

		if ($options && isset($options['roles'])) {
			$this->_roles = $options['roles'];
		}

		if ($options && isset($options['role'])) {
			$this->_roles = array($options['role']);
		}

		if ($options && isset($options['secure'])) {
			$this->_secure = $options['secure'];
		}

		if ($options && isset($options['clientId'])) {
			$this->_clientId = $options['clientId'];
		}

		if ($options && isset($options['clientName'])) {
			$this->_clientName = $options['clientName'];
		}

		if ($options && isset($options['conditions'])) {
			$this->_conditions = $options['conditions'];
		}

		if ($options && isset($options['ssl'])) {
			$this->_ssl = $options['ssl'];
		}
	}


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Public methods
	 */

	/**
	 * Get an Access Token for CloudTables
	 * @param boolean $echoError Indicate if errors should be shown (true by default)
	 * @return string|false `false` is return if unable to get a token, otherwise
	 *   an access token is given.
	 */
	public function token($echoError = true) {
		// Caching for token reuse
		if ($this->_accessToken !== null) {
			return $this->_accessToken;
		}

		$url = $this->_url('/api/1/access');
		$data = array();

		if ($this->_duration) {
			$data['duration'] = $this->_duration;
		}

		if ($this->_clientId) {
			$data['clientId'] = $this->_clientId;
		}

		if ($this->_clientName) {
			$data['clientName'] = $this->_clientName;
		}

		$json = $this->_curl($url, 'post', $data);

		if ($json === false) {
			return false;
		}
		else if (isset($json['errors'])) {
			if ($echoError) {
				print_r($json['errors']);
			}
		}
		else {
			$this->_accessToken = $json['token'];

			return $json['token'];
		}
	}

	/**
	 * Get the data and columns for a given dataset
	 * @return array|false See API documentation for details please. False is returned if
	 *   an error occurs.
	 */
	public function data($dataset) {
		$url = $this->_url('/api/1/dataset/'. $dataset .'/data');
		return $this->_curl($url, 'get');
	}

	/**
	 * Get summary information about the available datasets
	 * @return array|false See API documentation for details please. False is returned if
	 *   an error occurs.
	 */
	public function datasets() {
		$url = $this->_url('/api/1/datasets');
		$json = $this->_curl($url, 'get');

		return isset($json['datasets'])
			? $json['datasets']
			: false;
	}

	/**
	 * Get a script tag for a dataset
	 * @param string $arg1 Access token (from `->token()`) or Dataset id
	 * @param string $arg2 Dataset id if a token is given for $arg1, the styling framework otherwise
	 * @param string $arg3 Styling framework to use for the table
	 * @return string `<script>` tag to use
	 */
	public function scriptTag($arg1, $arg2=null, $arg3=null) {
		if ($arg2 === null) {
			$token = $this->token();
			$datasetId = $arg1;
			$style = 'd';
		}
		else if (preg_match('/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/', $arg1) === 1) {
			$token = $this->token();
			$datasetId = $arg1;
			$style = $arg2 !== null ? $arg2 : 'd';
		}
		else {
			$token = $arg1;
			$datasetId = $arg2;
			$style = $arg3 !== null ? $arg3 : 'd';
		}

		$src = $this->_url("/loader/{$datasetId}/table/{$style}");

		return "<script src='{$src}' data-token='{$token}'></script>";
	}


	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 * Private methods
	 */

	/**
	 * Perform a GET or POST request to get information. Assumes JSON will be returned
	 * @param string $url URL to query
	 * @param string $method 'get' or 'post'
	 * @param string $data Data to set to the server
	 * @return array|false Resolves JSON array or `false` on error
	 * @private
	 */
	private function _curl($url, $method, $data=array()) {
		// Add common parameters
		$data['key'] = $this->_key;

		if (count($this->_roles)) {
			$data['roles'] = $this->_roles;
		}

		if ($this->_conditions) {
			$data['conditions'] = $this->_conditions;
		}

		if ($method === 'get') {
			$url = $url . '?' . http_build_query($data);
		}

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

		if (! $this->_secure) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		}

		if ($method === 'post') {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		}

		$result = curl_exec($ch);

		if ($result === false) {
			$errno = curl_errno($ch);

			echo 'cURL encountered an error: '.$errno."\n";

			// https://access.redhat.com/documentation/en-us/red_hat_enterprise_linux/7/html/selinux_users_and_administrators_guide/sect-managing_confined_services-the_apache_http_server-booleans
			if ($errno === 7) {
				echo "If you have SELinux enabled you need to allow httpd to access the network - e.g. `setsebool -P httpd_can_network_connect on`\n";
			}

			curl_close($ch);
			return false;
		}

		curl_close($ch);
		return json_decode($result, true);
	}
	
	/**
	 * Get a url
	 * @param string $path The path to be prefixed by protocol, subdomain and domain.
	 * @return string The full url
	 * @private
	 */
	private function _url($path) {
		$protocol = $this->_ssl
			? 'https://'
			: 'http://';

		// Without a subdomain we need to add a leading `/io` for self hosting CT
		return $this->_subdomain
			? $protocol . $this->_subdomain . '.' . $this->_domain . $path
			: $protocol . $this->_domain . '/io' . $path;
	}
}
