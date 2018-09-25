<?php 
/*Es estas clases se podrán ver todos los metodos para la correcta funcionalidad de los respectivos modulos del proyecto.
En todas las clases presentes en la carpeta la forma de conexión es la misma el operador de los dos puntos se refiere a un operador de ambito el cual es usuado en las clases  que tienen la propiedad o modificador de acceso STATIC  para instanciar objetos y referenciar metodos de manera mas corta
El funcionamiento de las inserciones en las distintas clases es basicamente la misma la cual consiste en verificar si el producto no existe en bd para poder hacer o denegar el insert 
tambien estan clases auxiliares las cuales actuan en el momento de la actualización o insercion en algunos modulos llevando al formulario de edición o inserción  los datos requeridos por el usuario. Cabe resaltar que algunos arreglos se retornan puros es decir listos para que sea solo imprimir con la variable del campo y otros son anidados en otros arreglos para posteriormente ser llamados con un foreach generalmente 
 */
Class Autor
{	
	Private $db;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
	}

	public function insertar($nombre,$apellido,$nac,$fecha,$estado,$obras)
	{
		$fecha=str_replace(" ","",$fecha);		
		$estado=1;
		$verificacion_sql="SELECT * from autor where nombrea='$nombre'";
		#echo $verificacion_sql;
		$verificacion=$this->db->query($verificacion_sql);
		$trae=mysqli_fetch_array($verificacion);
		$nombre_1=$trae['nombrea'];
		if ($nombre_1!=null)
		{
			echo "<script> alert('Ya registrado') </script>";
		}
		else
		{	
			$sql="INSERT into autor (nombrea,apellidoa,nac,fechan,estadoa,obras,estado) values('$nombre','$apellido','$nac','$fecha','$estado','$obras','$estado')";
			$envio=$this->db->query($sql);
			header("Location: Autores_con_ctrl.php");
		}
	}

	public function consultar()
	{
		$datos=array();
		$visible=1;
		//sentencia sql
		$consulta="SELECT * FROM `autor` where estado='$visible' ";
		//ejecucion de la consulta
		$ejecutar=$this->db->query($consulta);
		//llamado de los datos en una tabla
		while($fila= mysqli_fetch_array($ejecutar))
		{
			//datos de  la tabla
			$datos[]=$fila;
		}
		return $datos;
	}
	public function trae_edit($dato)
	{
		$trae="SELECT * from autor where no_registro='$dato'";
		$envio=$this->db->query($trae);
		$info=mysqli_fetch_array($envio);
		return $info;
	}

	public function actualizar($dato,$nombre,$apellido,$nac,$fecha,$estado,$obras)
	{
		ob_start();
			if ($estado=="Activo")
			{ $est=1; }
			else
			{	$est=0; }

		$actualizar="UPDATE autor set nombrea='$nombre' , apellidoa='$apellido',nac='$nac',fechan='$fecha',estado='$est',obras='$obras' where no_registro='$dato'";
		#echo $actualizar;
		$envio=$this->db->query($actualizar);
		if ($envio==true) 
		{
			header("Location: Autores_con_ctrl.php");
		}
		else
		{
			echo "<script> alert('Problemas con el registro, vuelve a intentarlo ') </script>";
		}
	}

	public function eliminar($dato)
	{
		$estado=0;
		$sql="UPDATE autor set estado='$estado' where no_registro='$dato'";
		$envio=$this->db->query($sql);
		if ($envio==true) 
		{
			header("Location: Autores_con_ctrl.php");
		}
		else
		{
			echo "<script> alert('Problemas con la eliminacion, vuelve a intentarlo ') </script>";
		}
	}	
}
 ?>