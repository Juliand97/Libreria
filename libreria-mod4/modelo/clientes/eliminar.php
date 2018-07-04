
<?php
include("../../controlador/base_de_datos.php");
if (isset($_GET['elim_usu']))
{
	$suprimir= new Eliminar_cliente();
	$dato=$suprimir->borrar();
	echo "
	<script>
		alert('¡Eliminación exitosa!')
		window.location.replace('../../Vista/clientes/consulta.php');
	</script>
	";
	}
class Eliminar_cliente{

	public $borrar;

public function borrar(){

	$oculto=0;
	$inten = new Conexion();/*Llamado a la clase conexion*/
	$con=$inten->conm();
	/*Sentencias SQL*/
	$borrar = "UPDATE usuarios set estado='$oculto' WHERE identificacion='".$_GET['elim_usu']."'";

	$result = mysqli_query($con, $borrar) or die ($borrar);/*Ejecución de eliminación*/
	return true;
	}
}
?>
