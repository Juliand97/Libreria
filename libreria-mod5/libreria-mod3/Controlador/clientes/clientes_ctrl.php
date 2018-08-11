<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/clientes/Clientes.php';
$cl= new Clientes;
$trae=$cl->roles();
require_once '../../Vista/clientes/clientes.php';
require_once '../../Modelo/clientes/Clientes.php';
$cl= new Clientes;
if (!empty($_POST['insert']))
{
	$id=$_POST['doc'];
	$nom1=$_POST['pnombre'];
	$nom2=$_POST['snombre'];
	$ape1=$_POST['papellido'];
	$ape2=$_POST['sapellido'];
	$correo=$_POST['email'];
	$cont=$_POST['pass'];
	$permiso=$_POST['permiso'];

	$insertar=$cl->insertar($id,$nom1,$nom2,$ape1,$ape2,$correo,$cont);
	$permiso= $cl->permisos($id,$permiso);
}

 ?>