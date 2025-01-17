<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body background="img/fondo.webp" style="background-size: cover;">
    <div class="container">
        <div class="row mt-5">
            <div class="col">    
            </div>
            <div class="col">
                <form action="conexion.php" method="post">
                <div class="card mt-5" style="width: 100%;">
                    <div class="card-body">
                      <h5 class="card-title text-center">Inicio de sesion</h5>
                      <h6 class="card-subtitle mb-2 text-muted text-center">Sistema Veterinario</h6>
                      <div class="form-floating mb-3" style="margin-top: 50px;">
                        <input type="text" name="email" class="form-control" id="floatingInput" placeholder="">
                        <label for="floatingInput">Usuario</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" name="clave" class="form-control" id="floatingPassword" placeholder="">
                        <label for="floatingPassword">Clave</label>
                      </div>
                      
                      <div class="d-grid gap-2" style="margin-top: 40px;">
                        <button class="btn btn-primary" type="submit">Ingresar</button>
                        <button class="btn btn-outline-secondary" type="button">Registrar nuevo usuario</button>
                      </div>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
