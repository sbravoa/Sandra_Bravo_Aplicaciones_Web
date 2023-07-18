<!DOCTYPE html>
<html lang="en">
    <head>

   <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    <!-- Scripts de Bootstrap para Dropdown menu-->
    <link rel="stylesheet" href="css/style.css">
    <title>Noticias- Sani Papel Creativo</title> 
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
                    <li class="nav-item">
                        <a class="nav-link" href="">Nombre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Salir.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
        <!-- Contenido principal -->
        <div class="container mt-5">
        <h2 class="text-center mb-4">Noticias</h2>
        <!-- Mensaje de registro correcto -->
        <?php if (isset($_GET['crear']) && $_GET['crear'] == "success"): ?>
            <div class="alert alert-success" role="alert">
                La noticia se ha generado exitosamente
            </div>
        <?php endif; ?>
        <?php
            // Realizar la conexión a la base de datos
            include("db.php");

            if (!$conexion) {
                die("Error al conectar a la base de datos: " . mysqli_connect_error());
            }

            // Consulta de noticias ordenadas por fecha de publicación
            $consulta = "SELECT `id`, `titulo`, `contenido`, `imagen`, `fecha_publicacion` FROM `noticias` ORDER BY `fecha_publicacion` DESC";
            $resultado = mysqli_query($conexion, $consulta);
            if (!$resultado) {
                die("Error al obtener las noticias: " . mysqli_error($conexion));
            }

            // Mostrar las noticias
            if (mysqli_num_rows($resultado) > 0) {
                while ($fila = mysqli_fetch_assoc($resultado)) {
                    $titulo = $fila['titulo'];
                    $contenido = $fila['contenido'];
                    $imagen = $fila['imagen'];
                    $fecha_publicacion = $fila['fecha_publicacion'];

                    echo '
                    <div class="card noticia">
                        <img src="'.$imagen.'" class="card-img-top" alt="Imagen de la noticia">
                        <div class="card-body">
                            <h3 class="card-title">'.$titulo.'</h3>
                            <p class="card-text">'.$contenido.'</p>
                            <p class="fecha">'.$fecha_publicacion.'</p>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo '<p>No hay noticias disponibles</p>';
            }

            mysqli_close($conexion);
        ?>
        <!-- Botón para administrar las noticias -->
        <div class="text-center mt-4">
           <a href="crear_noticia.php" class="btn btn-secondary">Administrar Noticias</a>
        </div>
        <div class="espacio"></div>
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


