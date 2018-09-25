<?php 
class Genera_cod
{
	private $db;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
	}
	public  function codigos()
	{
		$generar1=random_int(0, 1000);
		$generar2=random_int(0, 1000);
		$generar3=random_int(0, 1000);
		$generar4=random_int(0, 1000);
		$recopilador=$generar1."--".$generar2."--".$generar3."--".$generar4;
		return $recopilador;	
	}

	public  function indice($id,$codigo)
	{
		$verificacion="SELECT * from usuario where identificacion='$id'";
		echo $verificacion;
		$envio=$this->db->query($verificacion);
		$datos=mysqli_fetch_array($envio);
		$ide=$datos['identificacion'];
		if ($ide==null)
		{
			echo "<script>alert('El usuario no esta registrado')</script>";

		}
		else
		{
			$sql="INSERT into historial(id_u,isbn_c,descripcion,fecha_de_entrada,cant_ingresada,Fecha_de_salida,cant_reservada,cant_lib_dev,fecha_de_devolucion) values('$id','0','Codigo de recuperacion clave $codigo','N/A','0','N/A','0','0','N/A')";
			$envio1=$this->db->query($sql);
		}	
	}
}
 ?>