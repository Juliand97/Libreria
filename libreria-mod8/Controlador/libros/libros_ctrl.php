<?php 
/*En este archivo se requieren 2 clases más ya que la informacion que se necesita es proveniente de bd */
/*Recepcion de informacion y envio a su respectivo procesamiento*/
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Modelo/categorias/Categorias.php';
require_once '../../Modelo/editoriales/Editoriales.php';
require_once '../../Modelo/libros/Libros.php';
require_once '../../Modelo/libros/Limpiar.php';

$limpiar= new Limpiar;
$e= new Editoriales;
$c= new Categorias;
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

	$caracteres=$limpiar->caracteres($isbn,$lib,$fec,$ed,$cat,$aut,$p_aut);
	$recostruccion=implode(",",$caracteres);
	list($isbn1,$lib1,$fec1,$ed1,$cat1,$aut1,$p_aut1)=explode(",",$recostruccion);

	$insertar=$l->insertar($isbn1,$lib1,$fec1,$ed1,$cat1,$aut1,$p_aut1);
}
 ?>