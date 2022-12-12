<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <!--- Estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body style="background-image: url(img/f5.jpg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <center>
    <h1 class="text-center pie text-light">Ingrese los datos que se le solicitan para registrarse en la pagina</h1>
        <div class="container col-7  bg-dark bg-opacity-50 rounded-4 fs-5 text-light my-4 pie">
            <!--- Formulario para registrarse --->
            <div class="container col-7  fs-5  ">
                <form action="r.php" method="post">
                    <label for="user">Ingrese un Nombre de usuario</label><br>
                    <input type="text" name="user" class="form-control"><br>
                    <label for="pass">Ingrese una contraseña</label><br>
                    <input type="password" name="pass" id="" class="form-control"><br>
                    <label for="age">Ingrese su edad</label><br>
                    <input type="number" name="age" id="" class="form-control"><br>
                    <label for="email">Ingrese su correo</label><br>
                    <input type="email" name="email" id="" class="form-control"><br>
                    <input type="submit" value="Registrarse" class="btn btn-outline-primary text-light col-8">
                </form><br>
                <a href="index.php" class="btn btn-outline-success text-light col-8">Regresar a pagina de inicio</a><br><br>
            </div>
        </div >
    </center>
</body>
</html>