<?php 
include("../../controlador/base_de_datos.php");
if (isset($_GET['elim_edit']))/*Si el usuario desea eliminar*/
		{
	$suprimir = new Eliminar_editorial();/*Llamado a la clase eliminar*/
	$dato = $suprimir->borrar();/*Referencia del método*/
	echo "
	<script>
		alert ('¡Eliminavión exitosa!')
	window.location.replace('../../Vista/editoriales/consulta.php');
	</script>
	";
	}
class Eliminar_editorial{

	public $borrar;

	public function borrar(){

		$inten = new Conexion();/*Llamado a la clase Conexion*/
		$con = $inten->conm();
		/*Sentencias SQL*/
		$borrar = "DELETE FROM editoriales WHERE codigo_postal='".$_GET['elim_edit']."'";
		$result = mysqli_query($con,$borrar) or die ($borrar);/*Ejecución de la eliminación*/
		return true;
	}
}
?>