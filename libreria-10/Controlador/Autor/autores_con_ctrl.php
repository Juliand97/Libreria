<?php 
/*En este archivo se encuentran las funciones de consultar, actualizar y eliminar 
Se deben tener en cuenta que los archivos de vista y modelo convergen aquí para funcionar 
Como se evidencia y se puede decir que estos archivos _ctrl son archivos de parametrizacion,recepcion,
envio y recepcion de datos por ende es un intermediario*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/Autor/Autor.php';
$a= new Autor;/*($id,$nombre,$apellido,$nac,$fechan,$estado,$obras);*/
$consulta=$a->consultar();

require_once '../../Vista/Autor/Consulta.php';
require_once '../../Modelo/Autor/Limpiar.php';
$revisar=new Limpiar;
if (!empty($_POST['edit'])) 
{
	$lleva=$a->trae_edit($_POST['dato']);
	require_once '../../Vista/Autor/editar_autor.php';
	
}

if (!empty($_POST['act']))
{
	$id=$_POST['id'];
	$nom=$_POST['nom'];
	$ape=$_POST['ape'];
	$nac=$_POST['nac'];
	$fecha=$_POST['fec_na'];
	$est=$_POST['est'];
	$obra=$_POST['obra'];

	$revisar=new Limpiar;
	$revisar1=$revisar->caracteres2($id,$nom,$ape,$nac,$fecha,$obra);
	$convertir=implode(",", $revisar1);
	list($id1,$nom1,$ape1,$nac1,$fecha1,$obra1)=explode(",",$convertir);
	$fecha1=str_replace(" ","", $fecha1);

	$act=$a->actualizar($id1,$nom1,$ape1,$nac1,$fecha1,$est,$obra1);
}

if (!empty($_GET['elim_aut']))
	{
		$indice=$_GET['elim_aut'];
		$elim=$a->eliminar($indice);
	}
 ?>