<?php 
#include("../../controlador/base_de_datos.php");
class t_cat
{
	public function info()
	{
		$bd= new conexion();
		$dato= $bd->conm();
		$informacion= "SELECT * from categorias";
		$traer= mysqli_query($dato,$informacion);
		while ($datos=mysqli_fetch_array($traer))
		{	
			echo "<option>".$nombre_cat=$datos['categoria']."</option>";
			
		}

	}
}

										 	


 ?>