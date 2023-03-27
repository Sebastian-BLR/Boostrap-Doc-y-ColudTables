<div class="container my-5">
    <h1 class="mb-4">Registro de usuario</h1>
    <form action="#" method="POST">

      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      
      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmar contraseña:</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
      </div>
      
      <div class="d-grid justify-content-md-end"> 
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </div>
    </form>
  </div>