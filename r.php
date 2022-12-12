<?php
include("conexion.php");
$con=conectar();

# recibir datos 
$user=$_POST['user'];
$pass=$_POST['pass'];
$age=$_POST['age'];
$email=$_POST['email'];

# ingresar a la base de datos
if ($user!=null||$pass!=null||$age!=null|$email!=null) {
	$sql="insert into usuario(usuario, edad, contrasena, correo)values('".$user."','".$age."','".$pass."','".$email."')";
	mysqli_query($con,$sql);
		if ($user=1) {
		header("location:index.php");
	}
}
?>