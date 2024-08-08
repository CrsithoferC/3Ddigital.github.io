<?php
include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contra = $_POST['pass'];

    // Sanitizar inputs para evitar inyecciones SQL
    $usuario = mysqli_real_escape_string($conexion, $usuario);
    $contra = mysqli_real_escape_string($conexion, $contra);

    $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contra'");

    if (!$resultado) {
        die("Error en la consulta: " . mysqli_error($conexion));
    }

    $fila = mysqli_num_rows($resultado);

    if ($fila > 0) {
        session_start();
        $_SESSION['trabajador'] = $usuario; 
        echo '
        <script>
        alert("Inicio de sesión exitoso");
        location.href = "usuario.php";
        </script>
        ';
        exit();
    } else {
        echo '
        <script>
        alert("El correo o la contraseña son inválidos");
        location.href = "entrar.php";
        </script>
        ';
        exit();
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
}
?>
