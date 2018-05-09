<?php 
session_start();//variable de sesion permite mantener una sesion activa
include "base_de_datos.php";
	$consulta=mysqli_query($con,"SELECT * FROM clientes  ");
	$fila = mysqli_fetch_array($consulta);//traer datos de mysql lineas 12,13,14.
	$user = $fila['Usuario'];
	$password = $fila['contrasena'];
	$_SESSION['usuario']=$user;
	$_SESSION['pass']=$password;
  if ($_SESSION['usuario']== $user && $_SESSION['pass']==$password)
 { 
	echo "<script>alert ('sesion terminada')</script>";
	session_destroy();
	echo "<script>window.location.replace('../vista/login cliente.php')</script>";
} 
 ?>