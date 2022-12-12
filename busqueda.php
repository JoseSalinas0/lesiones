<?php
include("conexion.php");
$con=conectar();
$usu=$_GET['usuario'];
$bus=$_GET['busqueda'];

$sql1='SELECT * FROM lesiones WHERE descripcion like "%'.$bus.'%"';
$query1 = mysqli_query($con,$sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busquedas</title>
    <!--- estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body style="background-image: url(img/f2.jpg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <!--- Barra de Inicio --->
    <nav class="navbar navbar-dark bg-dark text-light">
        Lesiones al practicar futboll
        <div class="text-light" id="">
            <a href="index.php?usuario=<?php echo $usu;?>" class="btn text-secondary mr-2">Regresar a la pagina principal</a>
        </div>
    </nav>

    <!--- Reultados --->
    <h1 class="container centrar pie text-light">Resultados de la busqueda de "<?php echo $bus; ?>":</h1>
        <?php
            while ($row = mysqli_fetch_array($query1)) {
        ?>
        <div class="container centrar pie col-10 bg-dark bg-opacity-50 mb-2 text-light">
                <div>
                    <center>
                        <h2><span id="titulo"><?php echo $row['parte_cuerpo']?></span></h2>
                        <h4><span id="Subtitulo"><?php echo $row['subparte_cuerpo']?></span></h4>
                        <h7><span id="Subtitulo"><?php echo $row['lesion']?></span></h7><br>
                        <span id="descripcion"><?php echo $row['descripcion']?></span><br><br>
                        <a href="rehabilitacion.php?id=<?php echo $row['id']?>&usuario=<?php echo $usu ?>&b=<?php echo $bus ?>" class="btn btn-outline-primary text-light col-5">Ver rehabilitacion</a>
                        <br><br>
                    </center>
                </div>
        </div>
        <?php
            }
        ?>
        <!-- Js -->
        <script >
            console.log("<?php echo $bus?>");
        </script>
</body>
</html>