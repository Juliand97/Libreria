<?php
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Vista/editoriales/editoriales.php'; 
require_once '../../Modelo/editoriales/Editoriales.php';
require_once '../../Modelo/editoriales/Limpiar.php';

$limpiar= new Limpiar;
$e= new Editoriales;
if (!empty($_POST['envio']))
{
	$editorial=$_POST['nom'];
	$cod=$_POST['cod'];

	$caracteres=$limpiar->caracteres($editorial,$cod);
	$recostruccion=implode(",",$caracteres);
	list($editorial1,$cod1)=explode(",",$recostruccion);

	$insertar=$e->insertar($cod1,$editorial1);

}
 ?>