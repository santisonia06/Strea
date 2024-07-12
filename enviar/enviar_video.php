<?php
// Conexión a la base de datos (reemplazar los datos de conexión por los correctos)
$conexion = mysqli_connect('localhost', 'id20552785_id21780450_id23456789', 'id23456789&T', 'id20552785_id21780450_id23456789');

// Comprobar errores de conexión
if (mysqli_connect_errno()) {
    echo "Error en la conexión a MySQL: " . mysqli_connect_error();
}

// Obtener los datos del formulario
$titulo = mysqli_real_escape_string($conexion, $_POST['titulo']);
$duracion = mysqli_real_escape_string($conexion, $_POST['duracion']);
$descripcion = mysqli_real_escape_string($conexion, $_POST['descripcion']);
$fecha_publicacion = mysqli_real_escape_string($conexion, $_POST['fecha_publicacion']);
$categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);
$calificacion = mysqli_real_escape_string($conexion, $_POST['calificacion']);
$reproducciones = mysqli_real_escape_string($conexion, $_POST['reproducciones']);
$url = mysqli_real_escape_string($conexion, $_POST['url']);
// Insertar el mensaje en la base de datos
$query = "INSERT INTO videos (titulo, duracion, descripcion, fecha_publicacion, categoria, calificacion, reproducciones, url) VALUES ('$titulo', '$duracion', '$descripcion', '$fecha_publicacion', '$categoria', '$calificacion', '$reproducciones', '$url')";
$result = mysqli_query($conexion, $query);

// Comprobar si hubo algún error en la consulta
if (!$result) {
    echo "Error al enviar el video: " . mysqli_error($conexion);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);

// Redirigir al index.php
header("Location: index.php");
?>