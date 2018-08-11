<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/libros/Libros.php';
require_once '../../Modelo/categorias/Categorias.php';
require_once '../../Modelo/editoriales/Editoriales.php';
require_once '../../Modelo/libros/Libros.php';
$c= new Categorias;
$e= new Editoriales;
$l= new Libros;
$consultar=$l->consulta();
require_once '../../Vista/libros/consultar libros.php';

if (!empty($_GET['edit_lib']))
{
	$dato=$_GET['edit_lib'];
	$edicion=$l->selec($dato);
	require_once '../../Vista/libros/editar libros.php';
}

if (!empty($_GET['elim_lib']))
{
	$indice=$_GET['elim_lib'];
	$eliminar=$l->eliminar($indice);
}

if (!empty($_POST['actualizar']))
{
	$isbn=$_POST['isb'];
	$libro=$_POST['libr'];
	$fecha=$_POST['fech'];
	$editorial=$_POST['edito'];
	$categoria=$_POST['cat'];
	$autor=$_POST['auto'];
	$p_a=$_POST['pais_de_aut'];
	$estado=$_POST['estado'];
	$indice=$_POST['oculto'];

	$actualizar=$l->actualizar($isbn,$libro,$fecha,$editorial,$categoria,$autor,$p_a,$estado,$indice);
}
 ?>