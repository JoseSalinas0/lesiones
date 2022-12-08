<?php
include("conexion.php");
$con=conectar();

$user=$_POST['user'];
$pass=$_POST['pass'];

$sql='SELECT usuario, contrasena FROM usuario WHERE usuario="'.$user.'" and contrasena="'.$pass.'"';
$query = mysqli_query($con,$sql);
if ($row = mysqli_fetch_array($query)) {
	if ($row['usuario'] == $user && $row['contrasena'] == $pass) {
		header('Location:index.php?usuario=' . $user . '');
	}
}else{
	header('Location:sesion.php');	
}

?>