<?php
// Obtener los datos del formulario
$titulo = $_POST['inputtitulo'];
$contenido = $_POST['inputcontenido'];
$imagen = $_POST['inputimagen'];

// Realizar la conexión a la base de datos (usando el archivo db.php)
include("db.php");

// Insertar una nueva noticia en la base de datos
$consultaInsertar = "INSERT INTO `noticias` (`titulo`, `contenido`, `imagen`, `fecha_publicacion`) 
                                    VALUES ('$titulo', '$contenido', '$imagen',CURRENT_TIMESTAMP)";

if (mysqli_query($conexion, $consultaInsertar)) {
    // El usuario se ha registrado exitosamente, redirigir a la página de inicio de sesión
    header("Location: noticias.php?crear=success");
    exit;
} else {
    // Ocurrió un error al crear la noticia, redirigir de vuelta al formulario
    header("Location: Noticias.php?error=3");
    exit;
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>