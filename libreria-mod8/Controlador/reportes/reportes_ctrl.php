<?php 
#require_once '../../Vista/reportes/filtros.php';
if (!empty($_REQUEST['lista'])) 
{
	$dato=$_REQUEST['lista'];
	require_once '../../Modelo/reportes/info_reporte.php';
	$reportes= new info;
	$reportes->traer($dato);
}
 ?>