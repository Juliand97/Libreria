<?php 
require_once '../../Modelo/busqueda/Busqueda.php';
$b= new Busqueda;
if (!empty($_POST['enviar']))
{
	$libro=$_POST['libro'];
	$buscar=$b->busqueda_visitante($libro);
	require_once '../../Vista/busqueda visitante/busqueda_r.php';
}
 ?>