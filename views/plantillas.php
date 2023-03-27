<header>
  <?php   $place = 'Templates';
            include_once __DIR__ . "/Components/navar.php"?>
</header>

<main>
  <div class="accordion accordion-flush" id="accordionFlushExample">

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon0"
          aria-expanded="false" aria-controls="flush-collapseOne">
          Formulario
        </button>
      </h2>

      <div id="acordeon0" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/templates/formulario.php' ?>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon1"
          aria-expanded="false" aria-controls="flush-collapseOne">
          Login
        </button>
      </h2>

      <div id="acordeon1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/templates/login.php' ?>
        </div>
      </div>
    </div>

  </div>
</main>