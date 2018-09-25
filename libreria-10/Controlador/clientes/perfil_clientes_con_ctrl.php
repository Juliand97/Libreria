<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
ob_start();
require_once ("../../Controlador/seguridad/inter/seguridad_default.php");
require_once '../../Modelo/clientes/Clientes.php';
require_once '../../Modelo/clientes/Limpiar.php';
$Limpiar=new Limpiar;
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

	$caracteres=$Limpiar->caracteres($id,$indice,$nombre,$nombre1,$apellido,$apellido1,$correo);
	$recostruccion=implode(",",$caracteres);
	print_r($caracteres);
	list($id1,$indice1,$nom_1,$nom_2,$ape_1,$ape_2,$correo_1)=explode(",",$recostruccion);
	$id1=ltrim($id1);
	$indice1=ltrim($indice1);
	$nom_1=ltrim($nom_1);
	$nom_2=ltrim($nom_2);
	$ape_1=ltrim($ape_1);
	$ape_2=ltrim($ape_2);
	$correo_1=ltrim($correo_1);	

	$actualizar=$cl->actualizar_perfil($id1,$nom_1,$nom_2,$ape_1,$ape_2,$correo_1,$indice1);
}
 ?>