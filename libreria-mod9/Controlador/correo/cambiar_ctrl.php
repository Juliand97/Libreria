<?php 
require_once '../../Vista/correo/cambiar_clave.php';
require_once '../../Modelo/correo/Cambiar_clave.php';
if (!empty($_POST['confirmar']))
{
	$id=$_POST['id'];
	$pass=$_POST['pass'];
	$pass1=$_POST['vpass'];
	$cod=$_POST['cod'];
	$cambio= new Cambiar_clave;
	$claves=$cambio->cambio($id,$pass,$pass1,$cod);
}

 ?>