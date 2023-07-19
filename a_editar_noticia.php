<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Scripts de Bootstrap para Dropdown menu-->
    <link rel="stylesheet" href="css/style.css">
    <title>Editar Noticia - Sani Papel Creativo</title> 
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
        <h2 class="text-center mb-4">Editar Noticia</h2>
        <!-- Código para editar la noticia -->
        <?php
            // Verificar si se ha enviado el ID de la noticia a editar
            if (isset($_POST['id_editar'])) {
                $id_noticia = $_POST['id_editar'];

                // Realizar la conexión a la base de datos (usando el archivo db.php)
                include("includes/db.php");

                $db = new DB();
                $conexion = $db->connect();

                // Obtener los datos de la noticia según el ID
                $consulta = "SELECT `titulo`, `imagen` ,`contenido` FROM `noticias` WHERE `id` = :id";
                $stmt = $conexion->prepare($consulta);
                $stmt->bindParam(':id', $id_noticia);
                $stmt->execute();
                $noticia = $stmt->fetch();

                // Verificar si se encontró la noticia
                if ($noticia) {
                    $titulo = $noticia['titulo'];
                    $imagen = $noticia['imagen'];
                    $contenido = $noticia['contenido'];

                    // Mostrar el formulario de edición de la noticia
                    echo '
                    <form action="guardar_edit_noticia.php" method="post">
                        <input type="hidden" name="id_noticia" value="'.$id_noticia.'">
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" class="form-control" id="titulo" name="inputtitulo" value="'.$titulo.'">
                        </div>
                        <div class="mb-3">
                          <label for="imagen" class="form-label">imagen</label>
                          <input type="text" class="form-control" id="imagen" name="inputimagen" value="'.$imagen.'">
                        </div>
                        <div class="mb-3">
                            <label for="contenido" class="form-label">Contenido</label>
                            <textarea class="form-control" id="contenido" name="inputcontenido" rows="4">'.$contenido.'</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </form>
                    ';
                } else {
                    echo '<p>No se encontró la noticia</p>';
                }

                // Cerrar la conexión a la base de datos
                $conexion = null;
            } else {
                echo '<p>No se ha proporcionado el ID de la noticia para editar</p>';
            }
        ?>
    </div>

    <!-- Footer personalizado -->
    <footer>
        <div style="text-align:center;">
            <p>Sandra Bravo | Sani Papel Creativo</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
