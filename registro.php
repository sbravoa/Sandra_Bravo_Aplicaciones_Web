<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Icono/Icono.ico">

    <title>Registro de Usuario - Sani Papel Creativo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <style>
      .bg{
          background-image: url(Img/img1.jpg);
          background-position: center center;
      }
    </style>
  </head>

  <body>
    <div class="container w-75 bg-light">
      <div class="row align-items-stretch">
        <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded"></div>
          <div class="col bg-white p-5">
              <div class="text-center">
                <h2 class="fw-bold text-center py-5">Registro de Usuario</h2>
              </div>

            <!-- Registro de Usuario -->
            <form method="post" action="guardar_usuario.php">
                <div class="mb-4 text-center">
                    <div class="mb-3">
                        <label for="inputNombre" class="sr-only">Nombre</label>
                        <input type="text" name="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="inputUsuario" class="sr-only">Usuario</label>
                        <input type="text" name="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="edad" class="sr-only">Edad:</label>
                        <input type="number"  name="inputEdad" class="form-control" placeholder="Edad" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="interes" class="form-label">Estoy interesado/a en la información de la página:</label>
                        <input type="checkbox" id="interes" name="interes">
                    <div class="input-group">
                    <input type="password" name="inputPassword" class="form-control" placeholder="Contraseña" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>  
                        </button>
                    </div>
                    <div class="input-group">
                        <input type="password" name="inputConfirmPassword" class="form-control" placeholder="Confirmar Contraseña" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>  
                        </button>
                    </div>
                </div>
                <div class="mb-3">
                    <button name="btnRegistrar" class="btn btn-lg btn-secondary btn-block" type="submit">Registrar</button>
                    <div class="my-3">
                        <span>¿Ya tienes una cuenta? <a href="Login.php">Inicia sesión</a></span>
                    </div>
                </div>
            </form>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>