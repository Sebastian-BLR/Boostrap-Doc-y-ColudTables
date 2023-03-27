<?php

// $data = http_build_query(array(
//   'key'  => 'nXRxgKOBicjPT0ZO90J0QJ8q',
  
// ));



// // Crea un nuevo recurso cURL
// $ch = curl_init('https://g3pdi28v5j.cloudtables.io/api/1/access');

// var_dump($ch);

// // Establece la URL y otras opciones apropiadas
// curl_setopt_array($ch,[
//   CURLOPT_POST => true,
//   CURLOPT_POSTFIELDS => $data,
//   CURLOPT_RETURNTRANSFER => true
// ]);
// // Captura la URL y la envía al navegador
// $data = curl_exec($ch);
// var_dump($data);
// // Cierrar el recurso cURL y libera recursos del sistema
// curl_close($ch);

require 'vendor/autoload.php';

$ctApi = new CloudTables\Api('g3pdi28v5j', 'nXRxgKOBicjPT0ZO90J0QJ8q');

?>
<?=$ctApi->scriptTag('fb657110-ca68-11ed-88de-1f510bbc4083', 'bs5')?>