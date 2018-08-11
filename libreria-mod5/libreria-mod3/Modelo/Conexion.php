<?php 
	//$con = mysqli_connect ("localhost","root","","libreria") or die ("Error");
class Conexion
{
	public  static function conm()
	{
		//variables para indicar los parametros de la conexion
		$servidor="localhost";
		$usuario="root";
		$bd="libreria";
		$password="";	
		//variiable de conexion que resibe los datos de las variables utilizando el apuntador
		$con=mysqli_connect(
			$servidor,
			$usuario,
			$password,
			$bd
);
			
			return $con;//variable con los datos de la base de datos
		}

	}




 ?>