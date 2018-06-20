
<?php
include("../../controlador/base_de_datos.php");
if (isset($_GET['elim_usu']))
{
	$suprimir= new Eliminar();
	$dato=$suprimir->borrar();
	echo "
	<script>
		alert('¡Eliminación exitosa!')
		window.location.replace('../../Vista/clientes/consulta.php');
	</script>
	";
	}
class Eliminar{

	public $borrar;

public function borrar(){

	$inten = new Conexion();/*Llamado a la clase conexion*/
	$con=$inten->conm();
	/*Sentencias SQL*/
	$borrar = "DELETE FROM usuarios WHERE identificacion='".$_GET['elim_usu']."'";
	$result = mysqli_query($con, $borrar) or die ($borrar);/*Ejecución de eliminación*/
	return true;
	}
}
?>
