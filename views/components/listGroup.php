<div class="row">
  <div class="col">
    <ul class="list-group">
      <li class="list-group-item">Un elemento</li>
      <li class="list-group-item">Un segundo elemento</li>
      <li class="list-group-item">Un tercer elemento</li>
      <li class="list-group-item">Un cuarto elemento</li>
      <li class="list-group-item">Y un quinto elemento</li>
    </ul>
  </div>
  <div class="col">
    <!-- Usa <a>s o <button>s para crear elementos de grupo de listas accionables con estados hover, disabled y active agregando .list-group-item-action. Separamos estas pseudoclases para garantizar que los grupos de listas hechos de elementos no interactivos (como <li>s o <div>s) no proporcionen la posibilidad de hacer clic o tocar. -->
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        El elemento de enlace actual
      </a>
      <a href="#" class="list-group-item list-group-item-action">Un segundo elemento de enlace</a>
      <a href="#" class="list-group-item list-group-item-action">Un tercer elemento de enlace</a>
      <a href="#" class="list-group-item list-group-item-action">Un cuarto elemento de enlace</a>
      <a class="list-group-item list-group-item-action disabled">Un elemento de enlace desactivado</a>
    </div>
  </div>
  <div class="col">
    <ol class="list-group list-group-numbered">
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">Subencabezado</div>
          Contenido para el elemento de la lista
        </div>
        <span class="badge bg-primary rounded-pill">14</span>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">Subencabezado</div>
          Contenido para el elemento de la lista
        </div>
        <span class="badge bg-primary rounded-pill">14</span>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">Subencabezado</div>
          Contenido para el elemento de la lista
        </div>
        <span class="badge bg-primary rounded-pill">14</span>
      </li>
    </ol>
  </div>
</div>
<div class="row mt-4">
  <div class="col">
    <!-- Horizontal
Agrega .list-group-horizontal para cambiar el diseño de los elementos del grupo de listas de vertical a horizontal en todos los breakpoints. Alternativamente, elije una variante responsive .list-group-horizontal-{sm|md|lg|xl|xxl} para hacer que un grupo de listas sea horizontal comenzando en el min-width de ese breakpoint. Actualmente, los grupos de listas horizontales no se pueden combinar con grupos de listas flush.

ProTip: ¿Quieres elementos de grupo de lista de igual ancho en posición horizontal? Agrega .flex-fill a cada elemento del grupo de listas.

 -->
    <ul class="list-group list-group-horizontal">
      <li class="list-group-item">Un elemento</li>
      <li class="list-group-item">Un segundo elemento</li>
      <li class="list-group-item">Un tercer elemento</li>
    </ul>
    <ul class="list-group list-group-horizontal-sm">
      <li class="list-group-item">Un elemento</li>
      <li class="list-group-item">Un segundo elemento</li>
      <li class="list-group-item">Un tercer elemento</li>
    </ul>
    <ul class="list-group list-group-horizontal-md">
      <li class="list-group-item">Un elemento</li>
      <li class="list-group-item">Un segundo elemento</li>
      <li class="list-group-item">Un tercer elemento</li>
    </ul>
    <ul class="list-group list-group-horizontal-lg">
      <li class="list-group-item">Un elemento</li>
      <li class="list-group-item">Un segundo elemento</li>
      <li class="list-group-item">Un tercer elemento</li>
    </ul>
    <ul class="list-group list-group-horizontal-xl">
      <li class="list-group-item">Un elemento</li>
      <li class="list-group-item">Un segundo elemento</li>
      <li class="list-group-item">Un tercer elemento</li>
    </ul>
    <ul class="list-group list-group-horizontal-xxl">
      <li class="list-group-item">Un elemento</li>
      <li class="list-group-item">Un segundo elemento</li>
      <li class="list-group-item">Un tercer elemento</li>
    </ul>
  </div>

  <div class="col">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action">Un elemento de grupo de lista predeterminado</a>

      <a href="#" class="list-group-item
                         list-group-item-action 
                         list-group-item-primary">Un elemento primary de grupo de lista
      </a>

      <a href="#" class="list-group-item
                         list-group-item-action 
                         list-group-item-secondary">Un elemento secondary de grupo de lista
      </a>

      <a href="#" class="list-group-item
                         list-group-item-action 
                         list-group-item-success">Un elemento success de grupo de lista
      </a>

      <a href="#" class="list-group-item
                         list-group-item-action 
                         list-group-item-danger">Un elemento danger de grupo de lista
      </a>

      <a href="#" class="list-group-item
                         list-group-item-action 
                         list-group-item-warning">Un elemento warning de grupo de lista
      </a>

      <a href="#" class="list-group-item
                         list-group-item-action 
                         list-group-item-info">Un elemento info de grupo de lista
      </a>

      <a href="#" class="list-group-item
                         list-group-item-action 
                         list-group-item-light">Un elemento light de grupo de lista
      </a>

      <a href="#" class="list-group-item
                         list-group-item-action 
                         list-group-item-dark">Un elemento dark de grupo de lista
      </a>

    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col">
    <div class="list-group">
      <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Encabezado de elemento de grupo de lista</h5>
          <small>Hace 3 días</small>
        </div>
        <p class="mb-1">Algo de contenido placeholder en un párrafo.</p>
        <small>Y alguna letra pequeña.</small>
      </a>
      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Encabezado de elemento de grupo de lista</h5>
          <small class="text-muted">Hace 3 días</small>
        </div>
        <p class="mb-1">Algo de contenido placeholder en un párrafo.</p>
        <small class="text-muted">Y alguna letra pequeña muted.</small>
      </a>
      <a href="#" class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Encabezado de elemento de grupo de lista</h5>
          <small class="text-muted">Hace 3 días</small>
        </div>
        <p class="mb-1">Algo de contenido placeholder en un párrafo.</p>
        <small class="text-muted">Y alguna letra pequeña muted.</small>
      </a>
    </div>
  </div>
</div>