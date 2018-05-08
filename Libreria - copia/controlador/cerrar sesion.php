<?php 
session_start();//variable de sesion permite mantener una sesion activa
include "base_de_datos.php";
	$consulta=mysqli_query($con,"SELECT * FROM clientes  ");
	$fila = mysqli_fetch_array($consulta);//traer datos de mysql lineas 12,13,14.
	$usuario = $fila['correo'];
	$contrasena = $fila['identifcacion'];
	
	$_SESSION['usuario']=$usuario;
	$_SESSION['pass']=$contrasena;
  if ($_SESSION['usuario']== $usuario && $_SESSION['pass']==$contrasena)
 { 
	echo "<script>alert ('sesion terminada')</script>";
	session_destroy();
	
	echo "<script>window.location.replace('../vista/login-index.php')</script>";
	
} 
 ?>