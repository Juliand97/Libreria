<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/editoriales/Editoriales.php';
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

	$actualizar=$e->actualizar($cod_act,$indicio,$nom_act);
}
if (!empty($_GET['elim_ed']))
 {
	$senal=$_GET['elim_ed'];
	$eliminar=$e->eliminar($senal);
}
 ?>