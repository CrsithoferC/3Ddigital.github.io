<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - 3M Digital</title>
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
            height: 60px;
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
        .container {
            text-align: center;
            margin-top: 100px;
        }
        .login-box {
            padding: 50px;
            display: inline-block;
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .login-box h1 {
            margin: 0 0 30px 0;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .form-group img {
            height: 24px;
            margin-right: 10px;
        }
        .form-group input {
            padding: 15px;
            font-size: 20px;
            width: 200px;
        }
        .login-box button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-box button:hover {
            background-color: #F5F5F5;
            color: #000;
        }
        .login-box p {
            margin-top: 30px;
        }
        .login-box a {
            text-decoration: none;
            color: RED;
            font-weight: bold;
        }
        .error {
            color: red;
            margin-bottom: 20px;
        }
        .foot {
    background-color: #333; 
    color: #fff; 
    padding: 10px;
    text-align: center;
    margin-top: 20px; 
}

.foot_p {
    margin: 0;
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
    <div class="container">
        <div class="login-box">
            <h1>ACCEDER</h1>
            <form action="login.php" method="POST" class="formulario">
                <div class="form-group">
                    <img src="imagenes/login.png" alt="Usuario">
                    <input type="text" name="usuario" class="formula" required placeholder=" Usuario">
                </div>
                <div class="form-group">
                    <img src="imagenes/clave.png" alt="Contraseña">
                    <input type="password" name="pass" class="formula" required placeholder=" Contraseña">
                </div>
                <button type="submit" class="enviar">Entrar</button>
                <p>¿No tienes cuenta?</p>
                <a href="registrar.php">REGISTRO</a>
            </form>
        </div>
    </div>
    <footer class="foot">
        <p class="foot_p">Pag web protegida por &copy;</p>
    </footer>
</body>
</html>
