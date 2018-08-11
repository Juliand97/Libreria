<?php 
require_once '../seguridad/inter/seguridad_cliente.php';
require_once '../../Vista/busqueda/busqueda.php';
require_once '../../Modelo/busqueda/Busqueda.php';
$b= new Busqueda;

if (!empty($_POST['enviar']))
{
	$dato=$_POST['libro'];
	
	$selec=$b->seleccion($dato);
	require_once '../../Vista/busqueda/busqueda_r.php';

}

if (!empty($_REQUEST['id']) and !empty($_REQUEST['cant']))
	{
		$isbn=$_REQUEST['id'];
		$cant=$_REQUEST['cant'];
		$reserva=$b->reserva($isbn,$cant);
	}
	

 ?>	


