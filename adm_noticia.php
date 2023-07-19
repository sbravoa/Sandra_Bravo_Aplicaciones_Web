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
                        <a class="nav-link" href="a_crear_noticia.php">Nueva noticia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/includes/logout.php">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
        <!-- Contenido principal -->
        <div class="container mt-5">
        <h2 class="text-center mb-4">Noticias</h2>
        <!-- Mensaje de modificacion correcta -->
        <?php if (isset($_GET['editar']) && $_GET['editar'] == "success"): ?>
            <div class="alert alert-success" role="alert">
                La modificacion fue exitosa
            </div>
        <?php endif; ?>
        <!-- Mensaje de eliminacion correcto -->
        <?php if (isset($_GET['eliminar']) && $_GET['eliminar'] == "success"): ?>
            <div class="alert alert-success" role="alert">
                La eliminacion fue exitosa
            </div>
        <?php endif; ?>
       <!-- Mensaje de creacion correcto -->
       <?php if (isset($_GET['crear']) && $_GET['crear'] == "success"): ?>
            <div class="alert alert-success" role="alert">
                La noticia se ha generado exitosamente
            </div>
        <?php endif; ?>

        <!-- Mensaje de usuario o contraseña incorrectos -->
        <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
            <div class="alert alert-danger" role="alert">
                Error en creacion de nueva noticia
            </div>
        <?php endif; ?>
        <!-- Mensaje de usuario o contraseña incorrectos -->
        <?php if (isset($_GET['error']) && $_GET['error'] == 2): ?>
            <div class="alert alert-danger" role="alert">
                Error en modificacion
            </div>
        <?php endif; ?>
        <!-- Mensaje de usuario o contraseña incorrectos -->
        <?php if (isset($_GET['error']) && $_GET['error'] == 3): ?>
            <div class="alert alert-danger" role="alert">
                Error en eliminacion 
            </div>
        <?php endif; ?>
        <?php
            // Realizar la conexión a la base de datos (usando el archivo db.php)
            include("includes/db.php");

            $db = new DB();
            $conexion = $db->connect();

            // Insertar el nuevo usuario en la base de datos
            $consulta = "SELECT `id`, `titulo`, `contenido`, `imagen`, `fecha_publicacion` FROM `noticias` ORDER BY `fecha_publicacion` DESC";
            $resultado = $conexion->query($consulta);
            if (!$resultado) {
                echo '<div class="alert alert-danger" role="alert">
                        Error al obtener las noticias
                      </div>';
            }

            // Mostrar las noticias
            if ($resultado->rowCount() > 0) {
                while ($fila = $resultado->fetch()) {
                    $id = $fila['id'];
                    $titulo = $fila['titulo'];
                    $contenido = $fila['contenido'];
                    $imagen = $fila['imagen'];
                    $fecha_publicacion = $fila['fecha_publicacion'];

                    echo '
                    <div class="card noticia-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <img class="img-thumbnail" src="' . $imagen . '" alt="Imagen" style="width: 250px; height: 250px;">
                                </div>
                                <div class="col-8">
                                    <h3 class="card-title">'.$titulo.'</h3>
                                    <p class="card-text">'.$contenido.'</p>
                                </div>
                                <div class="col-1">
                                    <form action="b_editar_noticia.php" method="post">
                                        <input type="hidden" name="id_editar" value=" '. $id .' ">
                                        <button type="submit" class="btn btn-outline-secondary btn-sm btn-block">Modificar</button>
                                    </form>
                                    <div class="espacio"></div>
                                    <form action="c_eliminar_noticia.php" method="post">
                                        <div class="form-group col-md-1">
                                            <input type="hidden" name="id_eliminar" value=" '. $id .' ">
                                            <button type="submit" class="btn btn-outline-secondary btn-sm btn-block">Eliminar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo '<p>No hay noticias disponibles</p>';
            }

            // Cerrar la conexión a la base de datos
            $conexion = null;
            ?>
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


