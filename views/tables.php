<header>
  <?php   $place = 'Tables';
            include_once __DIR__ . "/Components/navar.php"?>
</header>

<main class="bg-light mt-3">

<h2>Usuarios</h2>
<?php 
require_once  __DIR__ . '/../Ctables/user.php';
?>
<h2 class="my-2">Casas</h2>
<?php 
require_once  __DIR__ . '/../Ctables/house.php';
?>
</main>