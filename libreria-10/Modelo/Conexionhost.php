<?php 
	//$con = mysqli_connect ("localhost","root","","libreria") or die ("Error");
class Conexion
{
	public  static function conm()
	{
		//variables para indicar los parametros de la conexion
		$servidor="sql300.epizy.com";
		$usuario="epiz_22571546";
		$bd="epiz_22571546_libreria";
		$password="ft9JNF6o";	
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