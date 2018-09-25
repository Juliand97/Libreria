<?php 
/*En este archivo se  ejecuta la insercion de los datos.Cabe resaltar que este se separo del resto del crud debido al modelo de esquemas de html los cuale podian interferir unos con otros*/
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
		require_once '../../Modelo/autor/Limpiar.php';

		$revisar=new Limpiar;
		$revisar1=$revisar->caracteres($nombre,$apellido,$nac,$fechan,$estado,$obras);
		print_r($revisar1);
		$convertir=implode(",", $revisar1);
		list($nombre1,$apellido1,$nac1,$fechan1,$estado1,$obras1)=explode(",",$convertir);
		ltrim($nombre1);
	
		//llamado de la clase y paso de datos recojidos
		$a= new Autor;
		$b= $a->insertar($nombre1,$apellido1,$nac1,$fechan1,$estado1,$obras1);//llamado al metodo insertar|
	}
 ?>