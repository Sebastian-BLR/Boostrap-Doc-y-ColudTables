<!-- Activa un modal sin escribir JavaScript. Establece data-bs-toggle="modal" en un elemento controlador, como un botón, junto con data-bs-target="#foo" o href="#foo" para apuntar a un modal específico para alternar. -->


<div class="row">
  <div class="col">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Lanzar demo de modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Título del modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Cuerpo del modal
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar cambios</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="col">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Lanzar modal de fondo estático
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Título del modal</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Comprendido</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="col">
    
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
      tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Muestra un segundo modal y oculta este con el botón de abajo.
          </div>
          <div class="modal-footer">
            
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Abrir segundo
              modal</button>
         
            </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
      tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Oculta este modal y muestra el primero con el botón de abajo.
          </div>
          <div class="modal-footer">

            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Volver al
              primero</button>
          
            </div>
        </div>
      </div>
    </div>
   
    <!-- Disparador el primer modal -->
    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Abrir el primer modal</a>
  
  </div>

</div>

