<?php
include("conexion2.php");

$nombre = $_POST['nombre_'];
$numero = $_POST['numero_'];
$respuesta = $_POST['Respuesta_']; // Asegúrate de que este nombre coincida con el del formulario HTML
$comentarios = $_POST['comentarios_'];
$fecha = $_POST['fecha_'];
$ID = $_POST['ID_'];

// Depuración: Mostrar el valor de $respuesta
echo "Respuesta: " . $respuesta;

$cambiar = "UPDATE clientes SET 
    nombre = '$nombre',
    numero = '$numero',
    respuesta = '$respuesta',
    comentarios = '$comentarios',
    fecha = '$fecha' 
    WHERE ID_cliente = $ID";

$resultado = mysqli_query($conexion, $cambiar);

mysqli_close($conexion);
?>
