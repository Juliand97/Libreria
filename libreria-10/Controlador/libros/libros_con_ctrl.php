<?php 
/*En este archivo se requieren 2 clases más ya que la informacion que se necesita es proveniente de bd para la edicion */
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/libros/Libros.php';
require_once '../../Modelo/categorias/Categorias.php';
require_once '../../Modelo/editoriales/Editoriales.php';
require_once '../../Modelo/libros/Limpiar.php';

$limpiar= new Limpiar;
$c= new Categorias;
$e= new Editoriales;
$l= new Libros;
$consultar=$l->consulta();
require_once '../../Vista/libros/consultar libros.php';
require_once '../../Vista/reportes/filtros.php';

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

	$caracteres=$limpiar->caracteres2($isbn,$libro,$fecha,$autor,$p_a,$indice);
	$recostruccion=implode(",",$caracteres);
	list($isbn1,$libro1,$fecha1,$autor1,$p_a1,$indice1)=explode(",",$recostruccion);

	$actualizar=$l->actualizar($isbn1,$libro1,$fecha1,$editorial,$categoria,$autor1,$p_a1,$estado,$indice1);
}
 ?>