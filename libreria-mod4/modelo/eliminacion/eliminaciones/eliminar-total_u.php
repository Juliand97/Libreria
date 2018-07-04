<?php 
$envio_d=$_POST['envio'];
if (isset($envio_d)) 
{
	$dato=$_POST['id'];
	$els= new Eliminacion_de_sistema();
	$els->borrar($dato);
	
}
else
{
	
}
class Eliminacion_de_sistema
{
	public function borrar($dato)
	{	
		include '../../../Controlador/base_de_datos.php';
		$con= new Conexion();
		$bd=$con->conm();
		$consulta="DELETE from usuarios where identificacion='$dato'";
		$envio=mysqli_query($bd,$consulta);
		if($envio==true)
		{
			echo "bien";

		}
		else
		{
			echo "mal";
		}
	}
}


 ?>