<?php
$usuario = $_POST["inputUser"];
$password = $_POST["inputPassword"];

$conexion = mysqli_connect("localhost", "root", "", "usuarios");

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' and password='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas) {
    $datosUsuario = mysqli_fetch_assoc($resultado);
    $_SESSION["inputUser"] = $datosUsuario["nombre"]; // Establecer el nombre del usuario en la sesión
    $_SESSION["edad"] = $datosUsuario["edad"]; // Establecer la edad del usuario en la sesión
    $_SESSION["interes"] = $datosUsuario["interes"]; // Establecer el interes del usuario en la sesión
    header("location:index.php");
} else {
    header("location:login.php?error=1");
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>