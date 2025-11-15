<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Validación de formulario</title>
    <link rel="stylesheet" href="../dist/css/sesionE.css" />
</head>

<body>
    <!-- encabezado-->
    <div class="container-fluid" style="text-align:center; padding-top:30px;padding-bottom:20px;">

        <div class=row>
            <div class="col-4"></div>
            <div class="col-2"><img src="../dist/img/tecLogo.png" width="400px" height="200px"></div>
            <div class="col-5"></div>
        </div>
    </div>
    <!-- cuerpo-->
    <div class="container">
        <!--agregue el event al formulario-->
        <form id="registroForm" method="post" action="Servidor/insertarUsu.php"">
            <div class="form-floating mb-3" style="text-align: center; background-color:#1E354A;color:white;">
                <H3>REGISTRO DE USUARIOS</H3>
            </div>
            <div class="form-floating mb-3">
                <input type="texto" class="form-control" id="nombre" name="nombre" placeholder="Xayli Ximena Garcia Escalona" required>
                <label for="floatingPassword">NOMBRE</label>
            </div>
            
              <div class="form-floating mb-3">
                <input type="texto" class="form-control" id="division" name="division" placeholder="AV Miguel Hidalgo S/N">
                <label for="floatingPassword">DIVISIÓN</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="correo" name="correo" placeholder="name@example.com">
                <label for="floatingInput">CORREO</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                <label for="floatingPassword">CONTRASEÑA</label>
            </div>
            <div class="form-floating" style="text-align:center;padding: 40px;">
                <button type="submit" class="boton">Validar</button>

                 <a href="/inicial" class="boton">Ir a inicio</a>
                  <a href="/login" class="boton">Iniciar sesión</a>
              
            </div>
        </form>

    </div>

    

    </div>

    <!-- pie-->
    <div class="container-fluid">


    <footer>
  </footer>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Option 1: Bootstrap Bundle with Popper -->


    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>