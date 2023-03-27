<!-- Envuelve el elemento conmutador del menú desplegable (tu botón o enlace) y el menú desplegable dentro de .dropdown, u otro elemento que declare position: relative;. Los menús desplegables se pueden activar desde los elementos <a> o <button> para adaptarse mejor a tus necesidades potenciales. -->
<div class="row">

  <div class="dropdown col">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
      aria-expanded="false">
      Botón Dropdown
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" href="#">Acción</a></li>
      <li><a class="dropdown-item" href="#">Otra acción</a></li>
      <li><a class="dropdown-item" href="#">Algo más aqui</a></li>
    </ul>
  </div>

  <div class="dropdown col">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="hola" data-bs-toggle="dropdown"
      aria-expanded="false">
      Enlace Dropdown
    </a>

    <ul class="dropdown-menu" aria-labelledby="hola">
      <li><a class="dropdown-item" href="#">Acción</a></li>
      <li><a class="dropdown-item" href="#">Otra acción</a></li>
      <li><a class="dropdown-item" href="#">Algo más aqui</a></li>
    </ul>
  </div>

  <!-- Example single danger button -->
  <div class="col">
    <div class="btn-group">
      <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Acción
      </button>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Acción</a></li>
        <li><a class="dropdown-item" href="#">Otra acción</a></li>
        <li><a class="dropdown-item" href="#">Algo más aqui</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item" href="#">Enlace separado</a></li>
      </ul>
    </div>
  </div>

<!-- Example split danger button -->
<div class="btn-group col-2">
  <button type="button" class="btn btn-danger">Acción</button>
  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Acción</a></li>
    <li><a class="dropdown-item" href="#">Otra acción</a></li>
    <li><a class="dropdown-item" href="#">Algo más aqui</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Enlace separado</a></li>
  </ul>
</div>

</div>