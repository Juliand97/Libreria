<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/clientes/Clientes.php';
require_once '../../Modelo/clientes/Limpiar.php';
$Limpiar=new Limpiar;
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

	$actualizar=$cl->actualizar($id1,$nom_1,$nom_2,$ape_1,$ape_2,$correo_1,$indice1);
}
 ?>