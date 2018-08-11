<?php 

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
		$estado=1;
		$verificacion_sql="SELECT * from autores where nombrea='$nombre'";
		$verificacion=$this->db->query($verificacion_sql);
		$trae=mysqli_fetch_array($verificacion);
		$nombre=$trae['nombrea'];
		if ($nombre!=null)
		{
			echo "<script> alert('Ya registrado') </script>";
		}
		else
		{	
			$sql="INSERT into autores (nombrea,apellidoa,nac,fechan,estadoa,obras,estado) values('$nombre','$apellido','$nac','$fecha','$estado','$obras','$estado')";
			$envio=$this->db->query($sql);
			header("Location: Autores_con_ctrl.php");
	
		}

	}

	public function consultar()
	{
		$datos=array();
		$visible=1;
		//sentencia sql
		$consulta="SELECT * FROM `autores` where estado='$visible' ";
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
		$trae="SELECT * from autores where no_registro='$dato'";
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

		$actualizar="UPDATE autores set nombrea='$nombre' , apellidoa='$apellido',nac='$nac',fechan='$fecha',estado='$est',obras='$obras' where no_registro='$dato'";
		echo $actualizar;
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
		$sql="UPDATE autores set estado='$estado' where no_registro='$dato'";
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