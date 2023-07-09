<!DOCTYPE html>
<html lang="en">
    <head>

   <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    <!-- Scripts de Bootstrap para Dropdown menu-->
    <link rel="stylesheet" href="style.css">
    <title>Cuento</title> 

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
        <?php
            $titulo = "Mi Cuento";
            $imagenSrc = "imagen.jpg";
            $imagenAlt = "Imagen del cuento";
            $parrafos = [
                "Había una vez en un lejano bosque...",
                "Érase una vez un pequeño ratón llamado Tomás...",
                "Y así, Tomás vivió muchas aventuras...",
                "Fin del cuento."
            ];
        ?>

        <?php 
            echo "<h1 class='texto-cuento'>$titulo; </h1>"
        ?>
        <img src="<?php echo $imagenSrc; ?>" alt="<?php echo $imagenAlt; ?>">
            
        <?php
            foreach ($parrafos as $parrafo) {
                echo "<p class='texto-cuento'>$parrafo</p>";
            }
        ?>

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


