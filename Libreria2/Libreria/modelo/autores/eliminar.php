
<?php
include("../../controlador/base_de_datos.php");
if(isset($_GET['elim_aut']))//si dan click
{
	$suprimir= new Eliminar();//llamado a la clase
	$dato=$suprimir->borrar();//referencia a metodo
	echo"<script> window.location.replace('../../Vista/autores/consulta.php')</script>";
}

class Eliminar{

	public $borrar;

public function borrar(){

	$inten = new Conexion();/*Llamado a la clase conexion*/
	$con=$inten->conm();
	/*Sentencias SQL*/
	$borrar = "DELETE FROM autores WHERE no_registro='".$_GET['elim_aut']."'";
	$result = mysqli_query($con, $borrar) or die ($borrar);/*Ejecución de eliminación*/
	return true;
	}
}
?>
