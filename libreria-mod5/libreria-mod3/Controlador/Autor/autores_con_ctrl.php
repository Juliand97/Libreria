<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/Autor/Autor.php';
$a= new Autor;/*($id,$nombre,$apellido,$nac,$fechan,$estado,$obras);*/
$consulta=$a->consultar();

require_once '../../Vista/autor/Consulta.php';
if (isset($_POST['edit'])) 
{
	$lleva=$a->trae_edit($_POST['dato']);
	require_once '../../Vista/autor/editar_autor.php';
	
}
if (isset($_POST['act']))
{
	$id=$_POST['id'];
	$nom=$_POST['nom'];
	$ape=$_POST['ape'];
	$nac=$_POST['nac'];
	$fecha=$_POST['fec_na'];
	$est=$_POST['est'];
	$obra=$_POST['obra'];

	$act=$a->actualizar($id,$nom,$ape,$nac,$fecha,$est,$obra);
}
if (isset($_GET['elim_aut']))
	{
		$indice=$_GET['elim_aut'];
		$elim=$a->eliminar($indice);
	}
 ?>