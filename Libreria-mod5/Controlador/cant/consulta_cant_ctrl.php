<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento y visualización de la misma en un 2do archivo*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Vista/cant/consulta_cant.php';
require_once '../../Modelo/cant/Cantidad.php';
$c= new Cantidad;
if (!empty($_POST['consulta']))
{
	$isbn=$_POST['isbn'];
	$consulta=$c->consulta($isbn);
	require_once '../../Vista/cant/consulta_cant_r.php';
}
 ?>