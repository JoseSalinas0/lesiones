<?php
include("conexion.php");
$con=conectar();

# recibir datos
$us=$_POST['user'];
$com=$_POST['com'];
$fecha=$_POST['fecha'];

# ingresarlos a la base de datos
if ($us!=null && $com!=null && $fecha!=null) {
	$sql="insert into comentarios(usuario, comentario, fecha)values('".$us."','".$com."','".$fecha."')";
	mysqli_query($con,$sql);
	if ($user=1) {
		header("location:index.php?usuario=".$us);
	}else{
    }
}
?>
