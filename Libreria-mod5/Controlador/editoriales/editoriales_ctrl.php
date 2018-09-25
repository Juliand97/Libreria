<?php
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Vista/editoriales/editoriales.php'; 
require_once '../../Modelo/editoriales/Editoriales.php';
$e= new Editoriales;
if (!empty($_POST['envio']))
{
	$editorial=$_POST['nom'];
	$cod=$_POST['cod'];

	$insertar=$e->insertar($cod,$editorial);

}
 ?>