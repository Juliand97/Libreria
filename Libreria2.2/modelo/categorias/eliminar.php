
<?php
include("../../controlador/base_de_datos.php");
if(isset($_GET['elim_cat']))//si dan click
{
	$suprimir= new Eliminar();//llamado a la clase
	$dato=$suprimir->borrar();//referencia a metodo
		header("Location: ../../Vista/categorias/consulta.php");
}

class Eliminar{

	public $borrar;

public function borrar()
{

	$inten = new Conexion();/*Llamado a la clase conexion*/
	$con=$inten->conm();
	/*Sentencias SQL*/
	$borrar = "DELETE FROM categorias WHERE id_cat='".$_GET['elim_cat']."'";
	$result = mysqli_query($con, $borrar) or die ($borrar);/*Ejecución de eliminación*/
	return true;
	}
}
?>
