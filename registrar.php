<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body style="background-image: url(img/f5.jpg); background-repeat: no-repeat; background-size: cover;">
    <center>
        <div>
            <h1>Ingrese los datos que se le solicitan para registrarse en la pagina</h1>
            <form action="r.php" method="post">
                <label for="">Ingrese un Nombre de usuario</label><br>
                <input type="text" name="user"><br><br>
                <label for="">Ingrese una contraseña</label><br>
                <input type="password" name="pass" id=""><br><br>
                <label for="">Ingrese su edad</label><br>
                <input type="number" name="age" id=""><br><br>
                <label for="">Ingrese su correo</label><br>
                <input type="email" name="email" id=""><br><br>
                <input type="submit" value="Registrarse">
            </form><br>
            <a href="index.php">Regresar a pagina de inicio</a>
        </div>
    </center>
</body>
</html>