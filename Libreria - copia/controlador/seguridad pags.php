<?php
	include "base_de_datos.php";
	session_start();
	$usuarios=$_SESSION["usuario"];
	$contrasenas=$_SESSION["pass"];
	//echo $usuarios,$contrasenas;
	$consulta=mysqli_query($con,"SELECT * FROM administradores where Usuario='$usuarios' and contrasena='$contrasenas' ");
	$fila = mysqli_fetch_array($consulta);//traer datos de mysql lineas 12,13,14.
	$usuario = $fila['Usuario'];
	$contrasena = $fila['contrasena'];
	//echo $usuario,$contrasena;
?>