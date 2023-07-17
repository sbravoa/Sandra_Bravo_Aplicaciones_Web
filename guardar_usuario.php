<?php
// Obtener los datos del formulario
$nombre = $_POST['inputNombre'];
$usuario = $_POST['inputUsuario'];
$password = $_POST['inputPassword'];
$confirmPassword = $_POST['inputConfirmPassword'];

// Validar que las contraseñas coincidan
if ($password !== $confirmPassword) {
    // Redirigir de vuelta al formulario de registro con mensaje de error
    header("Location: registro.php?error=1");
    exit;
}

// Realizar la conexión a la base de datos (usando el archivo db.php)
include("db.php");

// Verificar si el usuario ya existe en la base de datos
$consultaUsuario = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$resultadoUsuario = mysqli_query($conexion, $consultaUsuario);

if (mysqli_num_rows($resultadoUsuario) > 0) {
    // El usuario ya existe, redirigir de vuelta al formulario de registro con mensaje de error
    header("Location: registro.php?error=2");
    exit;
}

// Insertar el nuevo usuario en la base de datos
$consultaInsertar = "INSERT INTO usuarios (nombre, usuario, password) VALUES ('$nombre', '$usuario', '$password')";

if (mysqli_query($conexion, $consultaInsertar)) {
    // El usuario se ha registrado exitosamente, redirigir a la página de inicio de sesión
    header("Location: login.php?registro=success");
    exit;
} else {
    // Ocurrió un error al insertar el usuario, redirigir de vuelta al formulario de registro con mensaje de error
    header("Location: registro.php?error=3");
    exit;
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>