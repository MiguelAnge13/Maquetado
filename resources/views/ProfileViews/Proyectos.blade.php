<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="../dist/css/stylespro.css">
</head>
<body>
    <header>
        <img src="../dist/img/LOGO.jpeg" alt="logo" class="logo">
        <h1>PROYECTOS</h1>
        <nav>
            
            <form action = "/Inicio">
                <button>INICIO</button>
            </form>
            <form action = "/Proyectos">
                <button class="pagactual">PROYECTOS</button>
            </form>
            <form action = "/Participantes">
                <button>PARTICIPANTES</button>
            </form>
            <form action = "/ibrerias">
                <button>LIBRERIAS</button>
            </form>
            <form action = "/Microcontrolador">
                <button>MICROCONTROLADOR</button>
            </form>
            <form action = "/Calibracion">
                <button>CALIBRACIÓN</button>
            </form>
            <form action = "/Codigos">
                <button>CÓDIGOS</button>
            </form>
            <form action = "/Historial">
                <button>HISTORIAL</button>
            </form>
            <form action="/login" method="post">
                <button type="submit">CERRAR SESIÓN</button>
            </form>
        </nav>
    </header>

    <div class="body">
        <div class="contenedor">
    <div class="titulo">Proyectos Almacenados</div>

    <div class="grid-proyectos">

      <div class="proyecto">
        <h3>Proyecto Robot Humanoide</h3>
        <p>Robot tipo humanoide de 30 servomotores.</p>
        <div class="detalles">Creado: 15/05/2025</div>
        <div class="etiqueta">En progreso</div>
      </div>

      <div class="proyecto">
        <h3>Proyecto Carrito WiFi</h3>
        <p>Carrito con introuccion mediante WiFi.</p>
        <div class="detalles">Creado: 28/04/2025</div>
        <div class="etiqueta" style="background-color: #e6ffe0; color: #28a745;">Completado</div>
      </div>

      <div class="proyecto">
        <h3>Proyecto Brazo Robotico</h3>
        <p>Brazo robotico controlado por camara Python.</p>
        <div class="detalles">Creado: 10/03/2025</div>
        <div class="etiqueta" style="background-color: #fff5e6; color: #ff9800;">Pendiente</div>
      </div>

      <!-- Puedes duplicar más tarjetas aquí -->

    </div>
  </div>
    </div>
</body>
</html>