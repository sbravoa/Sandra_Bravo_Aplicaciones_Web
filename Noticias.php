<!DOCTYPE html>
<html lang="en">
    <head>

   <!-- Estilos de Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
 <!-- Scripts de Bootstrap para Dropdown menu-->
 <link rel="stylesheet" href="css/style.css">
    <title>Cuento - Sani Papel Creativo</title> 

    <style>
        .texto-cuento {
            margin-left: 20px;
        }
        .bg{
          background-image: url(Img/img1.jpg);
          background-position: center center;
         }
    </style>
    
   </head>
    
    <body>
    <!-- Barra de navegación personalizada -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand mx-auto" href="#">SANI PAPEL CREATIVO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Index.php">Home</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="Noticias.php">Noticias</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Otros
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="fibonacci.php">Fibonacci</a></li>
                            <li><a class="dropdown-item" href="cuento.php">Cuento</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
        <!-- Contenido principal -->
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

        <!-- Footer personalizado -->
        <footer>
            <div style="text-align:center;" >
                <p>Sandra Bravo | Sani Papel Creativo</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
    
</html>
