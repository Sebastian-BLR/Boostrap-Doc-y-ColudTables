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
          Alertas
        </button>
      </h2>

      <div id="acordeon0" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/alertas.php' ?>
        </div>

      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon1"
          aria-expanded="false">
          Badges
        </button>
      </h2>

      <div id="acordeon1" class="accordion-collapse collapse" aria-labelledby="acordeon1">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/badges.php'?>
        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon2"
          aria-expanded="false">
          Buttons
        </button>
      </h2>

      <div id="acordeon2" class="accordion-collapse collapse" aria-labelledby="acordeon2">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/botones.php' ?>

        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon3"
          aria-expanded="false">
          Grupo de botones
        </button>
      </h2>

      <div id="acordeon3" class="accordion-collapse collapse" aria-labelledby="acordeon3">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/grupoBotones.php'; ?>
        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon4"
          aria-expanded="false">
          Cards
        </button>
      </h2>

      <div id="acordeon4" class="accordion-collapse collapse" aria-labelledby="acordeon4">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/card.php'; ?>
        </div>
      </div>

    </div>


    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon5"
          aria-expanded="false">
          Carousel
        </button>
      </h2>

      <div id="acordeon5" class="accordion-collapse collapse" aria-labelledby="acordeon5">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/carousel.php'; ?>
        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon6" aria-expanded="false">
          Collapse
        </button>
      </h2>

      <div id="acordeon6" class="accordion-collapse collapse" aria-labelledby="acordeon6">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/collapse.php'; ?>
        </div>
      </div>

    </div>
    
    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon7" aria-expanded="false">
          Dropdowns
        </button>
      </h2>

      <div id="acordeon7" class="accordion-collapse collapse" aria-labelledby="acordeon7">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/dropdowns.php'; ?>
        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon8" aria-expanded="false">
          List Group
        </button>
      </h2>

      <div id="acordeon8" class="accordion-collapse collapse" aria-labelledby="acordeon8">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/listGroup.php'; ?>
        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon9" aria-expanded="false">
          Modal
        </button>
      </h2>

      <div id="acordeon9" class="accordion-collapse collapse" aria-labelledby="acordeon9">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/modal.php'; ?>
        </div>
      </div>

    </div>

    <div class="accordion-item">

      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#acordeon10" aria-expanded="false">
          Offcanvas
        </button>
      </h2>

      <div id="acordeon10" class="accordion-collapse collapse" aria-labelledby="acordeon10">
        <div class="accordion-body">
          <?php include_once __DIR__ . '/components/offcanvas.php'; ?>
        </div>
      </div>

    </div>

  </div>
<div class="mt-2">
    
      <?php include_once __DIR__ . '/components/pagination.php' ?>
    
</div>
</main>