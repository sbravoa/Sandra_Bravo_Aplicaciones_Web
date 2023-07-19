<?php
// Obtener los datos del formulario
$id_noticia = $_POST['id_noticia'];
$titulo = $_POST['inputtitulo'];
$contenido = $_POST['inputcontenido'];
$imagen = $_POST['inputimagen'];

// Realizar la conexión a la base de datos (usando el archivo db.php)
include("includes/db.php");

$db = new DB();
$conexion = $db->connect();

// Insertar el nuevo usuario en la base de datos
$consultaActualizar = "UPDATE noticias SET titulo = '$titulo', contenido = '$contenido', imagen = '$imagen' WHERE id = '$id_noticia'";

if ($conexion->query($consultaActualizar)) {
    // El usuario se ha registrado exitosamente, redirigir a la página de inicio de sesión
    header("Location:adm_noticia.php?editar=success");
    exit;
} else {
    // Ocurrió un error al insertar el usuario, redirigir de vuelta al formulario de registro con mensaje de error
    header("Location:noticia.php?error=2");
    exit;
}

// Cerrar la conexión a la base de datos
$conexion = null;
?>