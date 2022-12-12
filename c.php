<?php
include("conexion.php");
$con=conectar();

# recibir datos
$us=$_POST['user'];
$com=$_POST['com'];

# ingresarlos a la base de datos
if ($us!=null && $com!=null) {
	$sql="insert into comentarios(usuario, comentario)values('".$us."','".$com."')";
	mysqli_query($con,$sql);
	if ($user=1) {
		header("location:index.php?usuario=".$us);
	}else{
    }
}
?>