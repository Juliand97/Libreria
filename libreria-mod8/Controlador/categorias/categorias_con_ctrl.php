<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/categorias/Categorias.php';
require_once '../../Modelo/categorias/Limpiar.php';
$c= new Categorias;
$Limpiar= new Limpiar;
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

	$caracteres=$Limpiar->caracteres2($id,$nombre);
	$reconstruccion=implode(",",$caracteres);
	list($id1,$nombre1)=explode(",",$reconstruccion);

	$actualiza=$c->actualizar($id1,$nombre1);
}
if (!empty($_GET['elim_cat'])) 
{
	$elimi=$_GET['elim_cat'];
	$eliminar=$c->eliminar($elimi);
}
 ?>