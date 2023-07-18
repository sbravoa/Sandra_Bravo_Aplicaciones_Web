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
                    <li class="nav-item">
                        <a class="nav-link" ><?php echo $user->getNombre();  ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/includes/logout.php">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
        <!-- Contenido principal -->
    <div class="container" style="text-align:center;">
        <?php
            $titulo = "Acerca de Mi";
            $imagenSrc = "Img/Cuento.jpg";
            $imagenAlt = "Imagen del cuento";
            $parrafos = [
                "¡Hola! Soy una Chilena viviendo en Panamá, y me siento muy afortunada de ser la madre de dos hijos maravillosos. Además de ser madre, me apasiona la creatividad en todas sus formas. ",
                "Soy una Memory Keeper y una Digital Scrapper, lo que significa que me encanta capturar y preservar los momentos más especiales de la vida a través de fotografías y diseño digital. Para mí, la creatividad es una forma de expresión y una manera de conectar con los demás. Siempre estoy buscando nuevas formas de aprender y crecer, y me emociona descubrir cosas nuevas cada día. En resumen, soy una apasionada de la creatividad y el aprendizaje continuo.",
            ];
        ?>

        <?php 
            echo "<h1 class='texto-cuento'>$titulo</h1>"
        ?>
                  
        <?php
            foreach ($parrafos as $parrafo) {
                echo "<p class='texto-cuento'>$parrafo</p>";
            }
        ?>
         <img src="<?php echo $imagenSrc; ?>" alt="<?php echo $imagenAlt; ?>">
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


