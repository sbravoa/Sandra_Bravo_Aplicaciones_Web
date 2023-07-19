<?php
// Obtener los datos del formulario
$nombre = $_POST['inputNombre'];
$usuario = $_POST['inputUsuario'];
$edad = $_POST['inputEdad'];
$interes = isset($_POST['interes']) ? 1 : 0; // Verifica si el checkbox fue marcado o no
$password = $_POST['inputPassword'];
$confirmPassword = $_POST['inputConfirmPassword'];

// Validar que las contraseñas coincidan
if ($password !== $confirmPassword) {
    // Redirigir de vuelta al formulario de registro con mensaje de error
    header("Location: registro.php?error=1");
    exit;
}

// Realizar la conexión a la base de datos (usando el archivo db.php)
include("includes/db.php");

$db = new DB();
$conexion = $db->connect();


// Verificar si el usuario ya existe en la base de datos
$consultaUsuario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";

$resultadoUsuario = $conexion->query($consultaUsuario);

if ($resultadoUsuario->rowCount() > 0) {
    // El usuario ya existe, redirigir de vuelta al formulario de registro con mensaje de error
    header("Location: registro.php?error=2");
    exit;
}

// Insertar el nuevo usuario en la base de datos
$consultaInsertar = "INSERT INTO `usuarios` (`usuario`, `password`, `nombre`, `email`, `edad`, `interes`)
                                  VALUES ('$usuario', '$password', '$nombre', '$email', '$edad', '$interes')";

if ($conexion->query($consultaInsertar)) {
    // El usuario se ha registrado exitosamente, redirigir a la página de inicio de sesión
    header("Location: login.php?registro=success");
    exit;
} else {
    // Ocurrió un error al insertar el usuario, redirigir de vuelta al formulario de registro con mensaje de error
    header("Location: registro.php?error=3");
    exit;
}

// Cerrar la conexión a la base de datos
$conexion = null;
?>