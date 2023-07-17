<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="Icono/Icono.ico">

    <title>Noticias - Sani Papel Creativo</title>

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
        <?php
            // Realizar la conexión a la base de datos
            $conexion=mysqli_connect("localhost","root","","usuarios");

            // Consulta de noticias ordenadas por fecha de publicación
            $consulta = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC";
            $resultado = mysqli_query($conexion, $consulta);
            
            // Verificar si hay noticias disponibles
            if (mysqli_num_rows($resultado) > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                  $titulo = $fila['titulo'];
                  $imagen = $fila['imagen'];
                  $descripcion = $fila['descripcion'];

                  // Mostrar cada noticia con su imagen
                  echo '
                    <div class="card mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="'.$imagen.'" class="img-fluid rounded-start" alt="Noticia">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">'.$titulo.'</h5>
                            <p class="card-text">'.$descripcion.'</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  ';
                }
              } else {
                // No hay noticias disponibles
                echo '<p>No hay noticias disponibles</p>';
              }

              mysqli_close($conexion);
            ?>

            <?php
          // Obtener los datos de la noticia
          $titulo = $noticia['titulo'];
          $imagen = $noticia['imagen'];
          $contenido = $noticia['contenido'];

          // Mostrar la imagen de la noticia en la columna de la izquierda
          echo '
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded" style="background-image: url('.$imagen.');">
            </div>
          ';

          // Mostrar los detalles de la noticia en la columna de la derecha
          echo '
            <div class="col bg-white p-5">
              <div class="text-center">
                <h2 class="fw-bold text-center py-5">Noticias</h2>
              </div>
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-12">
                    <img src="'.$imagen.'" class="img-fluid rounded-start" alt="Noticia">
                  </div>
                  <div class="col-md-12">
                    <div class="card-body">
                      <h5 class="card-title">'.$titulo.'</h5>
                      <p class="card-text">'.$contenido.'</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <a href="administrar_noticias.php" class="btn btn-primary">Administrar Noticias</a>
              </div>
            </div>
          ';

          mysqli_close($conexion);
        ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>