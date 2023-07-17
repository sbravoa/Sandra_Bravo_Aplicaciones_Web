<?php

    $usuario=$_POST["inputUser"];
    $password=$_POST["inputPassword"];

    session_start();
    $_SESSION["inputUser"]=$usuario;

    include("db.php");
    $consulta="SELECT* FROM usuarios WHERE usuario='$usuario' and password='$password'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);
    if ($filas){
        header("location:index.php");

    
    } else {
        header("location:login.php?error=1");
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
    ?>