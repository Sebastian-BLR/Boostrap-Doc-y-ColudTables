<header>
  <?php   $place = 'Components';
            include_once __DIR__ . "/components/navar.php"?>
</header>

<main class="mt-3">
  <div class="accordion accordion-flush" id="accordionFlushExample">

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon0"
          aria-expanded="false" aria-controls="flush-collapseOne">
          Placeholder
        </button>
      </h2>

      <div id="acordeon0" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/placeholders.php' ?>
        </div>

      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon1"
          aria-expanded="false">
          Popover
        </button>
      </h2>

      <div id="acordeon1" class="accordion-collapse collapse" aria-labelledby="acordeon1">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/popover.php'?>
        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon2"
          aria-expanded="false">
          Barra de Progreso
        </button>
      </h2>

      <div id="acordeon2" class="accordion-collapse collapse" aria-labelledby="acordeon2">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/progress.php' ?>

        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon3"
          aria-expanded="false">
          Scrollpy
        </button>
      </h2>

      <div id="acordeon3" class="accordion-collapse collapse" aria-labelledby="acordeon3">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/scrollpy.php'; ?>
        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon4"
          aria-expanded="false">
          Spinner
        </button>
      </h2>

      <div id="acordeon4" class="accordion-collapse collapse" aria-labelledby="acordeon4">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/spinners.php'; ?>
        </div>
      </div>

    </div>


    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon5"
          aria-expanded="false">
          Toasts
        </button>
      </h2>

      <div id="acordeon5" class="accordion-collapse collapse" aria-labelledby="acordeon5">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/toasts.php'; ?>
        </div>
      </div>

    </div>
  </div>
    
<div class="mt-2">
    
      <?php include_once __DIR__ . '/components/pagination.php' ?>
    
</div>
</main>