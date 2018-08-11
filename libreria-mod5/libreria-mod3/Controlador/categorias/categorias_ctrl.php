<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Vista/categorias/categorias.php';
require_once '../../Modelo/categorias/Categorias.php';
$c= new Categorias;
if (!empty($_POST['envio']))
{
	$cat=$_POST['cat'];
	$insertar= $c->insertar($cat);
}
 ?>
