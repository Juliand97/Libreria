<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
ob_start();
require_once ("../../Controlador/seguridad/inter/seguridad_default.php");
require_once '../../Modelo/clientes/Clientes.php';
$cl= new Clientes;
$consulta=$cl->datos_perfil();
require_once '../../Vista/clientes/perfil.php';
if (!empty($_GET['edit_cli']))
{
	$dato_e=$_GET['edit_cli'];
	$consulta=$cl->datos_perfil();
	require_once '../../Vista/clientes/editar_perfil.php';
}

if (!empty($_POST['act'])) 
{
	$id=$_POST['doc'];
	$indice=$_SESSION['id'];
	$nombre=$_POST['nombre'];
	$nombre1=$_POST['snom'];
	$apellido=$_POST['apellido'];
	$apellido1=$_POST['sape'];
	$correo=$_POST['email'];

	$actualizar=$cl->actualizar_perfil($id,$nombre,$nombre1,$apellido,$apellido1,$correo,$indice);
}
 ?>