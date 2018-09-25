<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Vista/categorias/categorias.php';
require_once '../../Modelo/categorias/Categorias.php';
require_once '../../Modelo/categorias/Limpiar.php';
$c= new Categorias;
$Limpiar= new Limpiar;
if (!empty($_POST['envio']))
{
	$cat=$_POST['cat'];
	$caracteres=$Limpiar->caracteres($cat);
	$insertar= $c->insertar($caracteres);
}
 ?>
