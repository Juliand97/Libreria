<?php 
#include("../../controlador/base_de_datos.php");
class t_edit
{
	public function info()
	{
		$visible=1;
		$bd= new conexion();
		$dato= $bd->conm();
		$informacion= "SELECT * from editoriales where estado='$visible'";
		$traer= mysqli_query($dato,$informacion);
		while ($datos=mysqli_fetch_array($traer))
		{	
			echo "<option>".$nombre_edit=$datos['nombre_e']."</option>";
			
		}

	}
}

										 	


 ?>