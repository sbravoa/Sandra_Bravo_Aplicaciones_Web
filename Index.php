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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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

  
  <!-- Contenido principal -->
        <main class="section1" style="text-align: center;">
            <h1 style="margin: 20px 0;">Bienvenido a mi página</h1>
            <h3>de Digital Scrapbook.</h3>
            <p> Que es un método a través del cual se plasman recuerdos, emociones o acontecimientos importantes. 
            Se utilizan fotografías y se decoran con ayuda de papeles estampados, cintas, cartulinas, washi tape,
            sellos y todo tipo de adornos. La traducción literal del término "Scrapbook" significa "libro de recortes", 
            aunque también puede tomar la forma de un álbum, una tarjeta o una lámina. </p>
        </main>

  <!-- Imágenes 2 circulares y redondeadas -->
       <div style="text-align: center;">
            <?php
                $directorio = "./media/*.jpg";
                $imagenes = glob($directorio);
                $totalImagenes = count($imagenes);
                foreach ($imagenes as $indice => $imagen) {
                    $clase = ($indice === 0 || $indice === $totalImagenes - 1) ? 'rounded-circle' : 'rounded';
                    echo '<img class="img-thumbnail ' . $clase . '" src="' . $imagen . '" alt="Imagen" style="margin-right: 10px; width: 250px; height: 250px;" />';
                }
            ?>
        </div>
        
  <!-- Seccion llamada ul con color de fondo personalizado en CSS -->
        <section class="mt-4">
            <?php
            $titulo = "Teams Creativos";
            $descripcion = "He participado en varios Team Creativos, Con Dunia Designs, Designed by Soco y Rachel Etrog";
            ?>

            <h2><?php echo $titulo; ?></h2>
            <h4><?php echo $descripcion; ?></h4>
            </section>
       
 
  <!-- Carousel de Bootstrap
       Las imagenes del Carusel me quedaban de distintos tamaños hasta que encontre la class d-block que me las formateo
       todas del mismo tamaño aunque encuentro se ven demaciado grandes. -->

        <div id="myCarousel" class="carousel slide mt-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <?php
                $directorio = "./Slides/*.jpg";
                $imagenes = glob($directorio);
                $totalImagenes = count($imagenes);

                foreach ($imagenes as $indice => $imagen) {
                    $activeClass = ($indice === 0) ? 'active' : '';
                    echo '<div class="carousel-item ' . $activeClass . '">';
                    echo '<img src="' . $imagen . '" class="d-block w-100" alt="Slide ' . ($indice + 1) . '">';
                    echo '</div>';
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

 
        <!-- Footer personalizado -->
        <footer>
            <div style="text-align:center;" >
                <p>Sandra Bravo | Sani Papel Creativo</p>
            </div>
        </footer>

          <!-- Script personalizado de Bienvenida
        <script>
            window.onload = function() {
            alert('Bienvenido a la página');

            var username = prompt('Ingresa tu nombre de usuario');
            if (username) {
                alert('Que tengas una linda experiencia, ' + username);
            }
            };
         </script> -->
         <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
    
</html>
