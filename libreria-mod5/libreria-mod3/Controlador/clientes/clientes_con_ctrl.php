<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/clientes/Clientes.php';
$cl= new Clientes;
$consulta=$cl->consulta();
require_once '../../Vista/clientes/consulta clientes.php';
if (!empty($_GET['edit_cli']))
{
	$dato_e=$_GET['edit_cli'];
	$edicion=$cl->selec($dato_e);
	require_once '../../Vista/clientes/editar_cliente.php';
}
if (!empty($_GET['elim_cli'])) 
{
	$dato_eli=$_GET['elim_cli'];
	$eliminar=$cl->eliminar($dato_eli);
}

if (!empty($_POST['act'])) 
{
	$id=$_POST['doc'];
	$indice=$_POST['indice'];
	$nombre=$_POST['nombre'];
	$nombre1=$_POST['snom'];
	$apellido=$_POST['apellido'];
	$apellido1=$_POST['sape'];
	$correo=$_POST['nombre'];

	$actualizar=$cl->actualizar($id,$nombre,$nombre1,$apellido,$apellido1,$correo,$indice);
}
 ?>