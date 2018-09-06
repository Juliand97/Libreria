<?php 
/*Visualizacion de los permisos del usuario en sesion*/
require_once '../../Modelo/permisos/Redireccion.php';
$log= new Redireccion;
if (!empty($_POST['redirec']))
{
	$rol=$_POST['lista'];
	$roles=$log->redireccionar($rol);
}
 ?>