<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once '../../Modelo/busqueda/Busqueda.php';
$b= new Busqueda;
if (!empty($_POST['enviar']))
{
	$libro=$_POST['libro'];
	$autor=$_POST['autor'];
	$editorial=$_POST['editorial'];
	$selec=$b->busqueda_avanzada($libro,$autor,$editorial);
	require_once '../../Vista/busqueda/busqueda_avan_r.php';
}

 ?>
