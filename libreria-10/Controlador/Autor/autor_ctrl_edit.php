<?php
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/Autor/Autor.php';
require_once '../../Modelo/Autor/Limpiar.php';
$a= new Autor;
$revisar=new Limpiar;

if (!empty($_POST['pre_act']))
{
	$lleva=$a->trae_edit($_POST['pre_ver']);
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

	$revisar1=$revisar->caracteres2($id,$nom,$ape,$nac,$fecha,$obra);
	$convertir=implode(",", $revisar1);
	list($id1,$nom1,$ape1,$nac1,$fecha1,$obra1)=explode(",",$convertir);
	$fecha1=str_replace(" ","", $fecha1);

	$act=$a->actualizar($id1,$nom1,$ape1,$nac1,$fecha1,$est,$obra1);
} 

?>