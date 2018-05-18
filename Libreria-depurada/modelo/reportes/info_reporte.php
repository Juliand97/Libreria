<?php
include ("../../controlador/base_de_datos.php");
class info
{
	public function traer() 
	{
		$conexion= new conexion();
		$get=$conexion->conm();
		$tabla="SELECT * from libros";
		return $traer=mysqli_query($get,$tabla);
	}
}


?>