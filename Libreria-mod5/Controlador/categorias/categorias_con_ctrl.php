<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/categorias/Categorias.php';
$c= new Categorias;
$consulta=$c->consultar();
require_once '../../Vista/categorias/consulta_categorias.php';
if (!empty($_GET['edit_cat']))
{
	$id=$_GET['edit_cat'];
	$datos_act=$c->edicion($id);
	require_once '../../Vista/categorias/editar_categoria.php';
}
if (!empty($_POST['actualiza']))
{
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];

	$actualiza=$c->actualizar($id,$nombre);
}
if (!empty($_GET['elim_cat'])) 
{
	$elimi=$_GET['elim_cat'];
	$eliminar=$c->eliminar($elimi);
}
 ?>