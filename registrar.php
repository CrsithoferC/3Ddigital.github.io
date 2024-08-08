<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - 3M Digital</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0; 
    padding: 0; 
    display: flex;
    flex-direction: column;
    align-items: center;
    background-image: url('imagenes/oficina.jpg');
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    min-height: 100vh; 
}
header {
    width: calc(100% - 40px);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: rgba(119, 119, 243, 0.8); 
    margin: 20px;
    border-radius: 10px;
}
        header img {
            height: 60px; /* Hacemos la imagen del logo un poco más grande */
        }
        nav {
            display: flex;
            gap: 20px;
        }
        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
        }
        nav a:hover {
    background-color: rgba(255, 255, 255, 0.7); 
    color: #000; 
}
        .register-box {
            padding: 50px;
            display: inline-block;
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
            text-align: center;
        }
        .register-box h1 {
            margin: 0 0 20px 0;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }
        .form-group label {
            width: 150px;
            text-align: left;
        }
        .form-group input {
            padding: 10px;
            font-size: 16px;
            width: 250px; /* Ajusta el ancho de los inputs según sea necesario */
            margin: 5px 0;
        }
        .register-box button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .register-box button:hover {
            background-color: #F5F5F5;
            color: #000;
        }
    </style>
</head>
<body>
    <header>
        <img src="imagenes/LOGO.png" alt="3M Logo">
        <nav>
            <a href="index.php">INICIO</a>
            <a href="informacion.php">INFORMACIÓN</a>
            <a href="entrar.php">ENTRAR</a>
        </nav>
    </header>
    <div class="register-box">
        <h1>REGISTRO</h1>
        <form action="registro.php" method="POST" class="formulario" id="registro_for">
            <div class="form-group">
                <label for="nombre"></label>
                <input type="text" id="nombre" name="nombre" class="formula" required placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="correo"></label>
                <input type="text" id="correo" name="correo" class="formula" required placeholder="Correo Electrónico">
            </div>
            <div class="form-group">
                <label for="telefono"></label>
                <input type="text" id="telefono" name="telefono" class="formula" required placeholder="Teléfono">
            </div>
            <div class="form-group">
                <label for="contrasena"></label>
                <input type="text" id="contrasena" name="contra" class="formula" required placeholder="Contraseña">
            </div>
            <button type="submit" class="formula_enviar">Registrar</button>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<script type="text/javascript" src="../JS/funciones.js" ></script>

</body>
</html>
