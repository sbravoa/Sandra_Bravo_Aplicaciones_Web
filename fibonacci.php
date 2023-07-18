<!DOCTYPE html>
<html lang="en">
    <head>

   <!-- Estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
 
    <!-- Scripts de Bootstrap para Dropdown menu-->
    <link rel="stylesheet" href="css/style.css">
    <title>Fibonacci - Sani Papel Creativo</title> 
    
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
        <!-- Seccion secuencia Fibonacci -->
        <div class="container">
            <form class="row g-3" method="post">
                <div class = "mt-3">
                    <label for="num" class="mr-2">Ingrese su numero de comienzo:</label>
                    <input type="number" id="num" name="num" min="1" class="form-control mr-2">
                    <input type="submit" value="Generar secuencia" class="btn btn-secondary">
                </div>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num = $_POST["num"];
                function fibonacci($num)
                {
                    $num_1 = 0;
                    $num_2 = 1;
                    $i = 0;
                    echo '<p class="mt-3">Secuencia de fibonacci:';
                    while ($i <= $num) {
                        echo "" . $num_1.",";
                        $num_3 = $num_2 + $num_1;
                        $num_1 = $num_2;
                        $num_2 = $num_3;
                        $i++;
                    }
                    echo "</p>";
                }
                fibonacci($num);
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


