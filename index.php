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
    <title>Bienvenido</title>
    <!--- estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body style="background-image: url(img/fondo1.jpeg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <!--- barra de busqueda --->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <span class="navbar-brand">Usuario: <?php echo $usu; ?></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex pie" action="busqueda.php" method="get">
                    <label for="busqueda" class="navbar-brand ">Buscar:</label><br>
                    <input type="text" placeholder="busqueda" name="busqueda" required class="form-control me-2">
                    <input type="text" hidden name="usuario" value="<?php echo $usu;?>">
                    <input type="submit" value="buscar" class="btn btn-outline-light bg-dark col-md-2 ms-end">
                </form>
            </div>
        </div>
    </nav>
    <br>
    <!--- inicio --->
    <div class="container centrar pie rounded-4 text-light" style="background-color: rgba(0, 0, 0, 0.5);" >
        <h1 class="">Lesiones</h1>
        <br>
        <span class="fs-4">En esta pagina podra ver algunas de las lesiones que pueden ocurrir a la hora de entrenar o de jugar futbol</span>
        <br><br>
    </div>
    <br>
    <!--- informacion --->
    <div class="container centrar rounded-4 text-light" style="background-color: rgba(0, 0, 0, 0.5);">
        <div ><button id="ant" hidden>««</button></div>
        <div><button id="sig" hidden>»»</button></div>
        <div>
        <h2><span id="titulo" class="fs-1">¿Qué es una lesión?</span></h2><br>
        <h4><span id="Subtitulo" class="fs-2">Alteración o daño en alguna parte del cuerpo</span></h4><br>
        <span id="descripcion" class="fs-4">Este es un cambio anormal en la morfología o estructura de una parte del cuerpo producida por un daño externo o interno.</span><br><br>
        <img src="img/l1.jpg" class="img-fluid" alt="">
        <br><br>
        </div>
    </div>
    <br>
    <!--- Pie de Pagina --->
    <footer class="bg-dark text-light ">
        <div class="row centrar navbar-brand pie">
            <div class="col-md-6">
                <h2>Creadores de la pagina</h2>
                    <li >Jose Guadalupe S.R.</li>
                    <li>Fernando Antonio D.R.</li>
                    <li>Esmeralda C.H.</li>
                    <li>Raul G.C.</li>
                </ol>
            </div>
            <!--- Inicio o Registro --->
            <div class="col-md-6 ">
                <center>
                <a href="registrar.php" class="btn btn-outline-success text-light col-5 mb-4" id="r">Registrarse</a>
                <a href="sesion.php" class="btn btn-outline-primary text-light col-5 mb-4" id="is">Iniciar sesión</a><br>
                <a href="index.php" class="btn btn-outline-primary text-light col-5 mb-4" id="cs">Cerrar sesión</a><br>
                </center>
            </div>
        </div>
        <!--- Comentarios --->
        <div class="col-md-12 centrar pie form-floating">
            <h2>Si desea dejar algun comentario con gusto lo leeremos</h2>
                <form action="c.php" method="post">
                    <label for="">Comentario:</label><br>
                    <textarea name="com" id="com" class="col-md-6 col-lg-6" cols="20" rows="5" placeholder="comentario"></textarea>
                    <input type="text" hidden name="user" value="<?php echo $usu;?>"><br>
                    <input type="submit" value="Enviar" class="btn btn-outline-info text-light col-2">
                    <br><br>
            </form>
        </div>
    </footer>
    <!--- JS --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="libs/moment/moment.min.js"></script>
    <script>
        var fecha = moment().format('MMM Do YY');
        var fec=document.getElementById("fec");
        console.log(fecha);
        fec.value=fecha;
        var usuario="<?php echo $usu?>";
        var cs=document.getElementById("cs");
        var is=document.getElementById("is");
        var r=document.getElementById("r");
        console.log(usuario);
        //Mostrar botones de registrarse, inicio o cerrar sesion depende del caso
        if(usuario!="No registrado"){
            cs.style.display="block";
            is.style.display="none";
            r.style.display="none";
        }else{
            cs.style.display="none";
            is.style.display="block";
            r.style.display="block";
        }
    </script>
</body>
</html>
