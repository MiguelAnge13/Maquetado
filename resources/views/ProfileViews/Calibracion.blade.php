<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calibración</title>
    <link rel="stylesheet" href="../dist/css/stylescal.css">
</head>
<body>
    <header>
        <img src="../dist/img/LOGO.jpeg" alt="logo" class="logo">
        <h1>CALIBRACIÓN</h1>
       <nav>
            
            <form action = "/Inicio">
                <button>INICIO</button>
            </form>
            <form action = "/Proyectos">
                <button>PROYECTOS</button>
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
                <button class="pagactual">CALIBRACIÓN</button>
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
        <div class="sb">
            <div class="b2">
                <div class="ns">
                    <h2>Servomotor: </h2>
                    <input type="number">
                </div>
                <div class="ng">
                    <h2>Grados: </h2>
                    <input type="number">
                </div>
            </div>
            <div class="b3">
                <button class="acciones">Regresar</button>
                <button class="acciones">Ingresar</button>
            </div>
        </div>
        <div class="img">
            <img src="img/RP.jpeg" alt="prototipo">
        </div>
    </div>
</body>
</html>