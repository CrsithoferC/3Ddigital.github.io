<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información - 3M Digital</title>
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
    background-color: rgba(119, 119, 243, 0.8); /* Color con transparencia */
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
    background-color: rgba(255, 255, 255, 0.7); /* Blanco con 70% opacidad */
    color: #000; /* Color del texto negro */
}

        .container {
            text-align: center;
            margin-top: 100px;
        }
        .info-box {
            border: 2px solid #333;
            padding: 50px;
            display: inline-block;
            margin-top: 50px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
        }
        .info-box p {
            margin-top: 20px;
            font-size: 18px;
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
        <h1>INFORMACIÓN</h1>
        <div class="info-box">
            <p>
                La gestión de relaciones con clientes se beneficia enormemente de estos datos, permitiendo un seguimiento eficiente de interacciones, la resolución de problemas y la implementación de programas de fidelización que aumentan la lealtad del cliente. Además, el conocimiento sobre las preferencias y compras anteriores ayuda a optimizar el inventario, asegurando la disponibilidad de los productos más demandados. Los datos también son necesarios para cumplir con regulaciones legales y para automatizar procesos, como el envío de correos electrónicos y recordatorios.
            </p>
        </div>
    </div>
</body>
</html>
