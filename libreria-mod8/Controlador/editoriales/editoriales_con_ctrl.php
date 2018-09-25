<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/editoriales/Editoriales.php';
require_once '../../Modelo/editoriales/Limpiar.php';

$limpiar= new Limpiar;
$e= new Editoriales;
$consulta=$e->consultar();
require_once '../../Vista/editoriales/consulta editoriales.php';
if (!empty($_GET['edit_ed']))
{
	$dato=$_GET['edit_ed'];
	$trae=$e->seleccion($dato);
	require_once '../../Vista/editoriales/editar editorial.php';
}
if (!empty($_POST['act']))
{
	$cod_act=$_POST['cod'];
	$indicio=$_POST['semilla'];
	$nom_act=$_POST['nom_act'];

	$caracteres=$limpiar->caracteres2($cod_act,$nom_act,$indicio);
	print_r($caracteres);
	$recostruccion=implode(",",$caracteres);
	list($cod_act1,$indicio1,$nom_act1)=explode(",",$recostruccion);

	$actualizar=$e->actualizar($cod_act1,$nom_act1,$indicio1);
}
if (!empty($_GET['elim_ed']))
 {
	$senal=$_GET['elim_ed'];
	$eliminar=$e->eliminar($senal);
}
 ?>