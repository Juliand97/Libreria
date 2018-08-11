<?php 
require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
require_once '../../Vista/Autor/registro.php';

if(isset($_POST['insert']))//si se le dio clic al boton enviar 
	{
		//datos recojidos

		$nombre= $_POST['nombrea'];
		$apellido= $_POST['apellidoa'];
		$nac= $_POST['nac'];
		$fechan= $_POST['fechan'];
		$estado= $_POST['estadoa'];
		$obras= $_POST['obras'];
		require_once '../../Modelo/autor/Autor.php';
		
		//llamado de la clase y paso de datos recojidos
		$a= new Autor;/*($id,$nombre,$apellido,$nac,$fechan,$estado,$obras);*/
		$b= $a->insertar($nombre,$apellido,$nac,$fechan,$estado,$obras);//llamado al metodo insertar

	}

 ?>