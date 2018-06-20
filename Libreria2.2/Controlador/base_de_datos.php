<?php
	//$con = mysqli_connect ("localhost","root","","libreria") or die ("Error");
	class Conexion{

		//variables para indicar los parametros de la conexion
		private $servidor="localhost";
		private $usuario="root";
		private $bd="libreria";
		private $password="";

		public function conm(){

			//variiable de conexion que resibe los datos de las variables utilizando el apuntador
			$con=mysqli_connect(

				$this->servidor,
				$this->usuario,
				$this->password,
				$this->bd
			);
			return $con;//variable con los datos de la base de datos

		}

	}
?>