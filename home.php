<!DOCTYPE html>
<html lang="en">
    <head>

    <!-- Estilos de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
        <!-- Scripts de Bootstrap para Dropdown menu-->
        <link rel="stylesheet" href="css/style.css">
        <title>Sani Papel Creativo</title> 
    
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
                            <a class="nav-link" href="/includes/logout.php">Cerrar sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
    <!-- Contenido principal -->
        <?php
            // Realizar la conexión a la base de datos (usando el archivo db.php)

            $page = new DB();
            $conexion = $page->connect();
            $consulta = "SELECT `id`, `pagina`, `titulo`, `titulo2`, `warning`, `directorio1`, `directorio2`, `directorio3`, `directorio4`, `contenido1`, `contenido2`, `contenido3`, `contenido4`, `contenido5`, `contenido6` FROM `info_pagina` WHERE `pagina` = 'home.php'";
            $resultado = $conexion->query($consulta);
            
            if (!$resultado) {
                echo '<div class="alert alert-danger" role="alert">
                        Error al obtener los datos de la página
                      </div>';
            }
            
            if ($resultado->rowCount() > 0) {
                $fila = $resultado->fetch(PDO::FETCH_ASSOC);
                $pagina = $fila['pagina'];
                $titulo1 = $fila['titulo'];
                $titulo2 = $fila['titulo2'];
                $warning = $fila['warning'];
                $directorio1 = $fila['directorio1'];
                $directorio2 = $fila['directorio2'];
                $contenido1 = $fila['contenido1'];
                $contenido2 = $fila['contenido2'];
                $contenido3 = $fila['contenido3'];
                $contenido4 = $fila['contenido4'];
                $contenido5 = $fila['contenido5'];
            }
        ?>


        <main class="section1" style="text-align: center;">
            <?php
              echo '<h1>' . $user->getNombre() .  $titulo1 . '</h1>'  ;
              echo $titulo2;
            
            if ($user->getEdad() < 18) {
                echo $warning;
            } else {
                echo $contenido1;
            }
            ?>
        </main>
            
        <!-- Imágenes 2 circulares y redondeadas -->
        <div style="text-align: center;">
            <?php
            if ($user->getEdad() > 18) {
                $imagenes = glob( $directorio1);
                $totalImagenes = count($imagenes);
                foreach ($imagenes as $indice => $imagen) {
                    $clase = ($indice === 0 || $indice === $totalImagenes - 1) ? 'rounded-circle' : 'rounded';
                    echo '<img class="img-thumbnail ' . $clase . '" src="' . $imagen . '" alt="Imagen" style="margin-right: 10px; width: 250px; height: 250px;" />';
                }
            }
            ?>
        </div>

        <section class="mt-4" style="text-align: center;">
            <?php
                if ($user->getEdad() > 18) {
                    echo $contenido2;
                    echo $contenido3;
                    echo $contenido4;
                }
            ?>
        </section>


        <div class="container">
            <?php
                // Mostrar el banner de información si el usuario marcó el check
                // carousel de Bootstrap
                if ($user->getInteres()) {
                    if ($user->getEdad()> 18) {
                        echo $contenido5;
                            echo '<div class="carousel-inner">';
                                $images = glob($directorio2);

                                foreach ($images as $index => $image) {
                                    $activeClass = ($index == 0) ? 'active' : ''; // Agrega la clase 'active' a la primera imagen
                                
                                echo '<div class="carousel-item ' . $activeClass . '">';
                                    echo '<img src="' . $image . '" class="d-block w-100" alt="Slide ' . ($index + 1) . '">';
                                echo '</div>';
                                }
                            echo '</div>';
                        echo '</div>';
                    }
                }
            ?>
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
