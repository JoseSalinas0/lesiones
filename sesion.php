<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Secion</title>
    <!--- Estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body style="background-image: url(img/f4.jpg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <center>
    <!--- Formulario para el inicio de sesion --->
    <h1 class="text-light pie">Iniciar Sesión</h1>
    <div class="container col-7  bg-dark bg-opacity-50 rounded-4 fs-5 pie my-4">
        <div class="container pie text-light col-md-6">
            <form action="s.php" method="post" ca>
                <label for="user">Ingrese su usuario</label><br>
                <input type="text" name="user" class="form-control"><br><br>
                <label for="pass">Ingrese su contraseña</label><br>
                <input type="password" name="pass" class="form-control"><br><br>
                <input type="submit" value="Entrar" class="btn btn-outline-primary text-light col-8">
            </form><br>
            <a href="index.php" class="btn btn-outline-success text-light col-8">Regresar a pagina de inicio</a><br><br>
        </div> 
    </div>

    </center>
</body>
</html>