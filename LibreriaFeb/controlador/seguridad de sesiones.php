<?php
	session_start();
	include "base_de_datos.php";
	$correo=$_SESSION["usuario"];
	$clave=$_SESSION["pass"];
	//echo $usuarios,$contrasenas;
	$consulta=mysqli_query($con,"SELECT * FROM clientes where correo='$correo'");
	$fila = mysqli_fetch_array($consulta);//traer datos de mysql lineas 12,13,14.
	$usuario = $fila['correo'];
	$contrasena = $fila['identifcacion'];
	
?>