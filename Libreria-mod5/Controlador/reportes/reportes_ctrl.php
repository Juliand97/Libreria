<?php 
require_once '../../Vista/reportes/filtros.php';
if (!empty($_REQUEST['lista'])) 
{
	$dato=$_REQUEST['lista'];
	require_once '../../Modelo/reportes/Filtro.php';
	$reportes= new Filtro($dato);
	$reportes->redireccionar();
}

 ?>