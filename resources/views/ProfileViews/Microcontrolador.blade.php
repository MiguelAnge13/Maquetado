<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microcontrolador</title>
    <link rel="stylesheet" href="../dist/css/stylesmic.css">
</head>
<body>
    <header>
        <img src="../dist/img/LOGO.jpeg" alt="logo" class="logo">
        <h2>MICROCONTROLADOR</h2>
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
                <button class="pagactual">MICROCONTROLADOR</button>
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
        <div class="izquierda">
            <div class="busqueda">
                <h1>Microcontrolador detectado: </h1>
                <h2>"Nombre de Microcontrolador" </h2>
                <input type="search" placeholder="Buscar Microcontrolador">
            </div>
            <div class="botones">
                <button class="acciones">Regresar</button>
                <button class="acciones">Ingresar</button>
            </div>
        </div>
        <div class="derecha">
            <div class="registros">
                <h2>Microcontroladores registrados</h2>
                <div class="imagenes">
                    <div class="fu">
                        <img src="img/MICRO.png" alt="Microcontrolador">
                        <img src="img/MICRO.png" alt="Microcontrolador">
                        <img src="img/MICRO.png" alt="Microcontrolador">
                    </div>
                    <div class="fd">
                        <img src="img/MICRO.png" alt="Microcontrolador">
                        <img src="img/MICRO.png" alt="Microcontrolador">
                        <img src="img/MICRO.png" alt="Microcontrolador">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>