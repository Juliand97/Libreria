<?php 
session_start();
class Administrador
{	
	Private $db;
	private $semilla;
	private $activo;
	private $inactivo;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
		$this->activo=1;
		$this->inactivo=0;
		$this->semilla='2018';

	}

	public function acceso_admin($id,$pass)
	{
		$consulta="SELECT * FROM usuarios WHERE identificacion='$id' and contrasena=aes_encrypt('$pass','$this->semilla') ";
			echo $consulta;
		$ejecutar=$this->db->query($consulta);
		$fila= mysqli_fetch_array($ejecutar);
		$ide=$fila['identificacion'];
		$nom=$fila['p_nombre'];
		$pass=$fila['contrasena'];
		$_SESSION['id']=$ide;
		$_SESSION['usuario']=$nom;
		$_SESSION['pass']=$pass;
		$_SESSION['admin']=$this->inactivo;		
		$_SESSION['default']=$this->inactivo;

		if ($_SESSION['admin']==$this->inactivo) 
		{
			$_SESSION['admin']=1;	
			echo "<script>alert('$_SESSION[admin]')</script>";
			#$_SESSION['default']=$this->activo;
		
			#header("Location: ../../Vista/pag_cliente.php");
		}

		if (!empty($_SESSION['usuario'])) 
		{
			header("location:../../Vista/pag_cliente.php");
		}
	}
}
 ?>
