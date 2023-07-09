<!DOCTYPE html>
<html lang="en">
    <head>

   <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    <!-- Scripts de Bootstrap para Dropdown menu-->
    <link rel="stylesheet" href="style.css">
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
                            <a class="nav-link active" aria-current="page" href="Inicio.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fibonacci.php">Fibonacci</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cuento.php">Cuento</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Papeleria Creativa
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Ver todo</a></li>
                                <li><a class="dropdown-item" href="#">Project Life</a></li>
                                <li><a class="dropdown-item" href="#">Layouts</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <?php
        // Obtener los datos enviados por el formulario
                $nombre = $_POST['nombre'];
                $edad = $_POST['edad'];
                $interes = isset($_POST['interes']);

                // Contenido principal 
                // Mostrar información según la edad del usuario
                if ($edad < 18) {
                    echo '<main class="section1" style="text-align: center;">';
                        echo '<h1>' . $nombre . ', Bienvenido a mi página  </h1>';
                        echo '<h3>de Digital Scrapbook.</h3>';
                        echo '<p> Por ser menor de edad esta pagina se encuentra restringida </p>';
                    
                    echo '</main>';
                } 
                
                
                else {
                    echo '<main class="section1" style="text-align: center;">';
                        echo '<h1>' . $nombre . ', Bienvenido a mi página  </h1>';
                        echo '<h3>de Digital Scrapbook.</h3>';
                        echo '<p> Que es un método a través del cual se plasman recuerdos, emociones o acontecimientos importantes. 
                        Se utilizan fotografías y se decoran con ayuda de papeles estampados, cintas, cartulinas, washi tape,
                        sellos y todo tipo de adornos. La traducción literal del término "Scrapbook" significa "libro de recortes", 
                        aunque también puede tomar la forma de un álbum, una tarjeta o una lámina. </p>';
                    echo '</main>';
                } 
            ?>


        <!-- Imágenes 2 circulares y redondeadas -->
       <div style="text-align: center;">
                
            <?php
            if ($edad > 18) {
                $directorio = "./media/*.jpg";
                $imagenes = glob($directorio);
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
                if ($edad > 18) {
                    echo '<h2>Teams Creativos</h2>';
                    echo '<h4>He participado en varios Team Creativos, </h4>';
                    echo '<h5>Con Dunia Designs, Designed by Soco y Rachel Etrog</h5>';
                }
            ?>
        </section>


        <div class="container">
            <?php
                // Mostrar el banner de información si el usuario marcó el check
                // carousel de Bootstrap
                if ($interes) {
                    if ($edad > 18) {
                        echo '<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">';
                            echo '<div class="carousel-inner">';
                            
                                $directorio = "./Slides/*.jpg";
                                $images = glob($directorio);

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
