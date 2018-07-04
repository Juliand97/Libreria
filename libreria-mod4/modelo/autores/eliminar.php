
<?php
include("../../controlador/base_de_datos.php");
if(isset($_GET['elim_aut']))//si dan click
{
	$suprimir= new Eliminar_autor();//llamado a la clase
	$dato=$suprimir->borrar();//referencia a metodo
	echo"<script> window.location.replace('../../Vista/autores/consulta.php')</script>";
}

class Eliminar_autor{

	public $borrar;

public function borrar(){

	$oculto=0;
	$inten = new Conexion();/*Llamado a la clase conexion*/
	$con=$inten->conm();
	/*Sentencias SQL*/
	$borrar = "UPDATE autores set estado='$oculto' WHERE no_registro='".$_GET['elim_aut']."'";
	$result = mysqli_query($con, $borrar) or die ($borrar);/*Ejecución de eliminación*/
	return true;
	}
}
?>
