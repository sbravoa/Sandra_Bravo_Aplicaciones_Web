<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="Icono/Icono.ico">

  <title>Registro de Noticia - Sani Papel Creativo</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">

  <style>
    .bg {
      background-image: url(Img/img1.jpg);
      background-position: center center;
    }
  </style>
</head>

<body>
  <div class="container w-75 bg-light">
    <div class="row align-items-stretch">
      <div class="col-12">
        <h2 class="fw-bold text-center py-5">Creación de Noticias</h2>
      </div>

      <!-- Registro de Noticia -->
      <div class="col-12">
        <form method="post" action="guardar_noticia.php">
          <div class="mb-3">
            <label for="inputtitulo" class="form-label">Título</label>
            <input type="text" name="inputtitulo" class="form-control" placeholder="Título" required autofocus>
          </div>

          <div class="mb-3">
            <label for="inputimagen" class="form-label">URL Imagen</label>
            <input type="text" name="inputimagen" class="form-control" placeholder="URL Imagen" required>
          </div>

          <div class="mb-3">
            <label for="inputcontenido" class="form-label">Contenido de la Noticia</label>
            <textarea class="form-control" name="inputcontenido" rows="3"></textarea>
          </div>

          <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
            <div class="alert alert-danger" role="alert">
              Ocurrió un error al insertar la noticia. Por favor, inténtalo de nuevo.
            </div>
          <?php endif; ?>

          <div class="mb-3">
            <button name="btnRegistrar" class="btn btn-lg btn-secondary btn-block" type="submit">Crear</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
