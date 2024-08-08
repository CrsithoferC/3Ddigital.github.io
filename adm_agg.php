<?php
include("conexion2.php");

$nombre = $_POST['adm_nombre'];
$numero = $_POST['adm_numero'];
$respuesta = $_POST['adm_Respuesta'];
$comentarios = $_POST['adm_comentarios'];
$fecha = $_POST['adm_fecha'];

$insertar = "INSERT INTO clientes (nombre, numero, respuesta, comentarios, fecha) VALUES ('$nombre', '$numero','$respuesta','$comentarios','$fecha')";

if ($conexion) {
    if (mysqli_query($conexion, $insertar)) {
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
} else {
    echo "Error al conectar a la base de datos: " . mysqli_connect_error();
}

mysqli_close($conexion);
?>
