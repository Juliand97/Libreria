<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Vista/cant/cantidad.php';
require_once '../../Modelo/cant/Cantidad.php';
$c= new Cantidad;
if (!empty($_POST['envia'])) 
{
	$id=$_POST['lib'];
	$cant=$_POST['cant'];
	$add=$c->add($id,$cant);
}

 ?>