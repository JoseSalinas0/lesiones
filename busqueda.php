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
    <link rel="stylesheet" href="stylesb.css">
    <title>Busquedas</title>
</head>
<body style="background-image: url(img/f2.jpg); background-repeat: no-repeat; background-size: cover;">
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
                while ($row = mysqli_fetch_array($query1)) {
            ?>
                <div>
                    <center>
                        <h2><span id="titulo"><?php echo $row['parte_cuerpo']?></span></h2>
                        <h4><span id="Subtitulo"><?php echo $row['subparte_cuerpo']?></span></h4>
                        <h7><span id="Subtitulo"><?php echo $row['lesion']?></span></h7><br>
                        <span id="descripcion"><?php echo $row['descripcion']?></span><br><br>
                        <a href="rehabilitacion.php?id=<?php echo $row['id']?>&usuario=<?php echo $usu ?>">Ver rehabilitacion</a>
                        <br><br>
                    </center>
                </div>
            <?php
                }
            ?>
        </div>

        <script>
            console.log("<?php echo $bus?>");
        </script>
</body>
</html>