<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/categorias/Categorias.php';
require_once '../../Modelo/editoriales/Editoriales.php';
require_once '../../Modelo/libros/Libros.php';
$c= new Categorias;
$e= new Editoriales;
$l= new Libros;
require_once '../../Vista/libros/libros.php';
if (!empty($_POST['insert']))
{
	$isbn=$_POST['v1'];
	$lib=$_POST['v2'];
	$fec=$_POST['v3'];
	$ed=$_POST['edit'];
	$cat=$_POST['cat'];
	$aut=$_POST['v4'];
	$p_aut=$_POST['v5'];

	$insertar=$l->insertar($isbn,$lib,$fec,$ed,$cat,$aut,$p_aut);
}
 ?>