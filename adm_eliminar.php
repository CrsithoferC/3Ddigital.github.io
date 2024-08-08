<?php
include("conexion2.php");

// Obtener los valores de los datos enviados por AJAX
$ideli = isset($_POST['id_eli']) ? $_POST['id_eli'] : '';
$nombre = isset($_POST['nombre_eli']) ? $_POST['nombre_eli'] : '';

// Verificar que el ID ha sido recibido correctamente
if (!empty($ideli)) {
    // Mostrar los valores recibidos (para depuración)
    echo "ID recibido: " . $ideli . " - Nombre recibido: " . $nombre;

    // Consulta para eliminar el cliente solo utilizando el ID
    $eliminar = "DELETE FROM clientes WHERE ID_cliente = $ideli";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $eliminar)) {
        echo "Cliente eliminado correctamente.";
    } else {
        echo "Error al eliminar cliente: " . mysqli_error($conexion);
    }
} else {
    echo "Error: ID del cliente vacío.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
