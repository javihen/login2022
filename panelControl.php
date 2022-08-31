<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema Veterinario</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Pacientes</a>
        <a class="nav-link" href="#">Consultas</a>
        <a class="nav-link" href="#">Productos</a>
        <a class="nav-link">Empleados</a>
      </div>
    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar mascota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="registrar.php" method="post">
      <div class="modal-body">
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Nombre</span>
          <input name="nombre" type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Edad</span>
          <input name="edad" type="number" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Raza</span>
          <input name="raza" type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="container">
    <div class="row p-4">
        <div class="col-4">
            <div class="card" style="width: 18rem; margin: top 20px;">
                <img src="img/gente.png" class="card-img-top" style="width: 200px; margin: 20px auto;" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="">Est. Mendoza Julian</h5>
                    <p class="card-text text-center">Me gusta mucha bailar y jugar al Wally.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <a href="" style="text-decoration:none;"><li class="list-group-item">Perfil</li></a>
                    <a href="" style="text-decoration:none;"><li class="list-group-item">Mensajes</li></a>
                    <a href="" style="text-decoration:none;"><li class="list-group-item">Configuraciones</li></a>
                </ul>
            </div>
        </div>
        <div class="col-8">
          <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Nueva mascota
</button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Mascota</th>
      <th scope="col">Edad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2 annos</td>
      <td>
        <button class="btn btn-primary">Editar</button>
        <button class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2 annos</td>
      <td>
        <button class="btn btn-primary">Editar</button>
        <button class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2 annos</td>
      <td>
        <button class="btn btn-primary">Editar</button>
        <button class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>2 annos</td>
      <td>
        <button class="btn btn-primary">Editar</button>
        <button class="btn btn-danger">Eliminar</button>
      </td>
    </tr>
   
  </tbody>
</table>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
