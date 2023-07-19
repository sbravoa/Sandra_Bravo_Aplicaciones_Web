<?php
// Obtener los datos del formulario
$titulo = $_POST['inputtitulo'];
$contenido = $_POST['inputcontenido'];
$imagen = $_POST['inputimagen'];

// Realizar la conexión a la base de datos (usando el archivo db.php)
include("includes/db.php");

$db = new DB();
$conexion = $db->connect();

// Insertar el nuevo usuario en la base de datos
$consultaInsertar = "INSERT INTO `noticias` (`titulo`, `contenido`, `imagen`, `fecha_publicacion`) 
                                    VALUES ('$titulo', '$contenido', '$imagen',CURRENT_TIMESTAMP)";

if ($conexion->query($consultaInsertar)) {
    // El usuario se ha registrado exitosamente, redirigir a la página de inicio de sesión
    header("Location: noticias.php?registro=success");
    exit;
} else {
    // Ocurrió un error al insertar el usuario, redirigir de vuelta al formulario de registro con mensaje de error
    header("Location: noticias.php?error=3");
    exit;
}

// Cerrar la conexión a la base de datos
$conexion = null;
?>