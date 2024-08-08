<?php
include('conexion.php');

// Verificar si la conexión se establece correctamente
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

// Verificar si los datos se reciben correctamente
if (!isset($_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['contra'])) {
    die("No se recibieron todos los datos necesarios.");
}

$usuario = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$pass = $_POST['contra'];

// Mensajes de depuración para verificar datos recibidos
echo "Datos recibidos: <br>";
echo "Usuario: $usuario <br>";
echo "Correo: $correo <br>";
echo "Teléfono: $telefono <br>";
echo "Contraseña: $pass <br>";

$verificacion = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

if (!$verificacion) {
    die("Error en la consulta de verificación: " . mysqli_error($conexion));
}

$r = mysqli_num_rows($verificacion);

if ($r > 0) {
    echo '
    <script>
    alert("El nombre de usuario ya está siendo utilizado");
    location.href = "registrar.php";
    </script>
    ';
    exit;
}

$insertar = mysqli_query($conexion, "INSERT INTO usuarios (usuario, contraseña, correo, telefono, rol)
VALUES('$usuario', '$pass', '$correo', '$telefono', 'trabajador')");

if ($insertar) {
    echo '
    <script>
    alert("Registro exitoso");
    location.href = "entrar.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Error en el registro: ' . mysqli_error($conexion) . '");
    location.href = "registrar.php";
    </script>
    ';
}

mysqli_close($conexion);
?>
