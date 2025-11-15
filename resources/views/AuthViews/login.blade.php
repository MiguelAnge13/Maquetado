<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interfaz de Autenticación</title>
    <link rel="stylesheet" href="../dist/css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background: url(../dist/img/fondoB.jpg);">
    <div class="auth-container" style="text-align: center;">
    <img src="../dist/img/logo.png" width="150px" height="150px" style="border-radius: 100%; border: 5px solid  white;  background-size: contain;"/>
        <h2>Iniciar Sesión</h2>
            <form method='POST' action = "Cliente/Inicio.php">
                <input type="email" placeholder="Correo electrónico" name="correo" />
                <input type="password" placeholder="Contraseña" name="contra" />
                <button type="submit" class="boton">Iniciar Sesión</button>
                <a href="/sesion" class="boton">Registrar</a>
                <a href="Servidor/recuperar.php">¿Olvidaste tu contraseña?</a>
            </form>
    </div>

    <div class="robotcito" style="background: url(../dist/img/ro.png) no-repeat center center; background-size: contain; width: 500px; height: 800px;">

    </div>

</body>

</html>
