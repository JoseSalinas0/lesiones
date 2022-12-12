<?php
include("conexion.php");
$con=conectar();
$usu=$_GET['usuario'];
$bus=$_GET['id'];
$b=$_GET['b'];

$sql1='SELECT * FROM lesiones WHERE id='.$bus.'';
$sql2='SELECT * FROM rehabilitacion WHERE id_lesion = '.$bus.'';
$query1 = mysqli_query($con,$sql1);
$query2 = mysqli_query($con,$sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehabilitacion</title>
    <!--- estilos --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body style="background-image: url(img/f3.jpeg); background-position: center center; background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <!--- Barra de Inicio --->
    <nav class="navbar navbar-dark bg-dark text-light">
        Lesiones al practicar futboll
        <div class="text-light" id="">
            <a href="index.php?usuario=<?php echo $usu;?>" class="btn text-secondary mr-2">Regresar a la pagina principal</a>
            <a href="busqueda.php?usuario=<?php echo $usu;?>&busqueda=<?php echo $b?>" class="btn text-secondary">Regresar a la pagina de busqueda</a>
        </div>
    </nav>
    <!--- informacio --->
        <div class="container pie centrar text-light col-10 bg-dark bg-opacity-50 mb-2 text-light my-3">
            <?php
            $row1 = mysqli_fetch_array($query1);
            $row2 = mysqli_fetch_array($query2);
            ?>
            <div>
                    <h1><span id="titulo"><?php echo $row1['lesion']?></span></h2>
                        <span id="descripcion"><?php echo $row2['descripcion']?></span><br><br>
                        <span><?php echo $row2['serie_tiempo']?></span><br>
                        <span><?php echo $row2['serie_lapso']?></span><br>
                        <span><?php echo $row2['periodo']?></span><br>
                        <br><br>
                </div>
        </div>
        <script>
            console.log("<?php echo $b?>");
        </script>
</body>
</html>