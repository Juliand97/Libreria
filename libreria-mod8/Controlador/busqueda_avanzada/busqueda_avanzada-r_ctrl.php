<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once '../../Modelo/busqueda/Busqueda.php';
require_once '../../Modelo/busqueda/Limpiar.php';
$b= new Busqueda;
$Limpiar= new Limpiar;
if (!empty($_POST['enviar']))
{

	$libro=$_POST['libro'];
	$autor=$_POST['autor'];
	$editorial=$_POST['editorial'];
	$caracteres=$Limpiar->caracteres3($libro,$autor,$editorial);
	$reconstruccion_datos=implode(",",$caracteres);
	list($libro1,$autor1,$editorial1)=explode(",",$reconstruccion_datos);
	$selec=$b->busqueda_avanzada($libro1,$autor1,$editorial1);
	require_once '../../Vista/busqueda/busqueda_avan_r.php';

}
 ?>