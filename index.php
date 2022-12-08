<?php

if(isset($_GET['usuario'])){
    header("Access-Control-Allow-Origin: *");
    $usu=$_GET['usuario'];
}else{
    $usu= 'No registrado';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Bienvenido</title>
</head>
<body>
    <center>
        <div id="i">
            <div id="ico">
                <center>
                    <br>
                    Usuario: <?php echo $usu; ?>
                </center>
            </div>
            <div id="buscar">
                <center>
                    <br>
                    <form action="busqueda.php" method="get">
                        <label for="">Si desea buscar alguna parte del cuerpo:</label><br>
                        <input type="text" placeholder="busqueda" name="busqueda" required >
                        <input type="text" hidden name="usuario" value="<?php echo $usu;?>">
                        <input type="submit" value="buscar">
                    </form>
                </center>
            </div>
        </div>
        <div class="t">
            <h1>Lesiones</h1>
            <br>
            En esta pagina podra ver algunas de las lesiones que pueden ocurrir a la hora de entrenar o de jugar futbol
            <br><br>
        </div>
        <div class="p">
            <div ><button id="ant" hidden>««</button></div>
            <div><button id="sig" hidden>»»</button></div>
            <div>
            <h2><span id="titulo">¿Qué es una lesión?</span></h2><br>
            <h4><span id="Subtitulo">Alteración o daño en alguna parte del cuerpo</span></h4><br>
            <span id="descripcion">Este es un cambio anormal en la morfología o estructura de una parte del cuerpo producida por un daño externo o interno.</span><br><br>
            <img src="img/l1.jpg" alt="">
            <br><br>
            </div>
        </div>
        <div id="f">
            <div id="contacto">
                <center>
                    <br>
                    <h2>Creadores de la pagina:</h2>
                    <ol>
                        <li>Jose Guadalupe S.R.</li>
                        <li>Fernando Antonio D.R.</li>
                        <li>Esmeralda C.H.</li>
                        <li>Raul G.C.</li>
                    </ol><br>
                        <h2>Si desea dejar algun comentario con gusto lo leeremos</h2>
                        <form action="">
                            <label for="">Comentario:</label><br>
                            <input type="text" placeholder="comentario" id="com">
                            <input type="text" hidden name="usuario" value="<?php echo $usu;?>"><br>
                            <input type="submit" value="Enviar">
                        </form>
                </center>
                
            </div>
            <div id="inicio">
                <center>
                    <br><br>
                    <form action="sesion.php"><button id="is">Iniciar sesión</button><br><br></form>
                    <form action="registrar.php"><button id="r">Registrarse</button></form>
                </center>
            </div>

    </center>
</body>
</html>