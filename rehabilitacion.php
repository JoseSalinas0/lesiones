<?php
include("conexion.php");
$con=conectar();
$usu=$_GET['usuario'];
$bus=$_GET['id'];
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
    <link rel="stylesheet" href="stylesb.css">
    <title>Rehabilitacion</title>
</head>
<body style="background-image: url(img/f3.jpeg); background-repeat: no-repeat; background-size: cover;">
<div id="i">
            <div id="ico">
                <center>
                    <br>
                    Lesiones al practicar futboll
                </center>
            </div>
            <div id="buscar">
                <center>
                    <br>
                    <form action="index.php" method="get">
                        <label for="">Regresar al pagina principal</label><br>
                        <input type="text" hidden name="usuario" value="<?php echo $usu; ?>">
                        <input type="submit" value="Regresar">
                    </form>
                </center>
            </div>
        </div>
        <div class="p">
            <?php
            $row1 = mysqli_fetch_array($query1);
            $row2 = mysqli_fetch_array($query2);
            ?>
                <div>
                    <center>
                    <h2><span id="titulo"><?php echo $row1['lesion']?></span></h2>
                        <span id="descripcion"><?php echo $row2['descripcion']?></span><br><br>
                        <span><?php echo $row2['serie_tiempo']?></span><br>
                        <span><?php echo $row2['serie_lapso']?></span><br>
                        <span><?php echo $row2['periodo']?></span><br>
                        <br><br>
                    </center>
                </div>
        </div>
        
        <script>
            console.log("<?php echo $bus?>");
        </script>
</body>
</html>