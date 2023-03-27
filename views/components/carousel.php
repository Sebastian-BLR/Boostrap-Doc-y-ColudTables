<!-- 
La clase .active debe agregarse a una de las diapositivas 
para controles opcionales,Los elementos de control e indicadores 
deben tener un atributo data-bs-target (o href para enlaces) que
coincida con el id del elemento .carousel.

Agrega .carousel-fade a tu carrusel para animar las diapositivas con una transición de fundido en lugar de una diapositiva.

Agrega data-bs-interval="" a .carousel-item para cambiar la cantidad de tiempo de retraso entre el ciclo automático al siguiente elemento

 data-bs-interval="false", por lo que no se reproduce automáticamente.
-->



<div class="row g-1 h-50">
  <div class="col">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/scr/img/gato1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/scr/img/gato2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/scr/img/gato3.png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>
  </div>

  <div class="col">
    <div id="carouselControl" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/scr/img/gato1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/scr/img/gato2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/scr/img/gato3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselControl" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselControl" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
</div>

<div class="row g-1">
  <div class="col">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">  
          <img src="/scr/img/gato1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/scr/img/gato2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/scr/img/gato3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
  <div class="col">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/scr/img/gato1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Etiqueta de la primera diapositiva</h5>
        <p>Algún contenido placeholder representativo para la primera diapositiva.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/scr/img/gato2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Etiqueta de la segunda diapositiva</h5>
        <p>Algún contenido placeholder representativo para la segunda diapositiva.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/scr/img/gato3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Etiqueta de la tercera diapositiva</h5>
        <p>Algún contenido placeholder representativo para la tercera diapositiva.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
  </div>
</div>