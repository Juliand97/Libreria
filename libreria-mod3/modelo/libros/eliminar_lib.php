
<?php

	include("../../controlador/base_de_datos.php");

if (isset($_GET['elim_isbn']))/*Si el usuario desea eliminar*/
{	
	$suprimir = new Eliminar_libro();/*Llamado a la clase*/
	$dato = $suprimir->borrar();/*Referencia del mtodo*/

	echo "
	<script>
		alert('¡Eliminación exitosa!')
		window.location.replace('../../Vista/libros/consulta_lib.php');
	</script>
	";
	}
class Eliminar_libro{

	public $borrar;

public function borrar(){

	$inten = new Conexion();/*Llamado a la clase conexion*/
	$con=$inten->conm();
	/*Sentencias SQL*/
	$borrar = "DELETE FROM libros WHERE isbn='".$_GET['elim_isbn']."'";
	$result = mysqli_query($con, $borrar) or die ($borrar);/*Ejecución de eliminación*/
	return true;
	}
}

?>




		