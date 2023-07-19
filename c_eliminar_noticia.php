<?php
// Obtener los datos del formulario
$id = $_POST['id_eliminar'];
// Realizar la conexión a la base de datos (usando el archivo db.php)
include("includes/db.php");

$db = new DB();
$conexion = $db->connect();

// Insertar el nuevo usuario en la base de datos
$consultaEliminar = "DELETE FROM `noticias` WHERE id = $id";

if ($conexion->query($consultaEliminar)) {
    // El usuario se ha registrado exitosamente, redirigir a la página de noticias
    header("Location: adm_noticia.php?eliminar=success");
    exit;
} else {
    // Ocurrió un error al eliminar la noticia
    header("Location: noticia.php?error=3");
    exit;
}

// Cerrar la conexión a la base de datos
$conexion = null;
?>