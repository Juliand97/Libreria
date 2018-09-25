<?php 
/*Este archivo hace  la busqueda del cliente-visitante sino que el formulario de la busqueda envia los datos por post como se hacia en la anterior version */
require_once '../../Modelo/busqueda/Busqueda.php';
$b= new Busqueda;
if (!empty($_POST['enviar']))
{
	require_once '../../Modelo/busqueda/Limpiar.php';
	$libro=$_POST['libro'];
	$Limpiar= new Limpiar;
	$caracteres=$Limpiar->caracteres($libro);

	$buscar=$b->busqueda_visitante($libro);
	require_once '../../Vista/busqueda visitante/busqueda_r.php';
}
 ?>