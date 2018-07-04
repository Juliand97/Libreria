<?php 
#include("../../controlador/base_de_datos.php");
class t_cat
{
	public function info()
	{
		$bd= new conexion();
		$dato= $bd->conm();
		$visible=1;
		$informacion= "SELECT * from categorias where estado='$visible'";
		$traer= mysqli_query($dato,$informacion);
		while ($datos=mysqli_fetch_array($traer))
		{	
			echo "<option>".$nombre_cat=$datos['categoria']."</option>";
			
		}

	}
}

										 	


 ?>