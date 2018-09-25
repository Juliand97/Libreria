<?php 
class Cambiar_clave
{
	private $db;
	private $semilla;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
		$this->semilla='2018';
	}

	public function cambio($id,$pass,$pass2,$cod)
	{
		if ($pass!=$pass2) 
		{
			echo "<script>alert('Las claves no cohinciden')</script>";
		}
		else
		{
			$verifica="SELECT * from historial where id_u='$id'";
			$envio=$this->db->query($verifica);
			$trae=mysqli_fetch_array($envio);
			$ide=$trae['id_u'];
			if (!empty($ide))
			{
				$verifica1="SELECT * FROM historial WHERE descripcion like'%$cod%'";
				$envio1=$this->db->query($verifica1);
				$trae1=mysqli_fetch_array($envio1);
				if (!empty($trae))
				{
					$user="UPDATE usuario set contrasena=aes_encrypt('$pass','$this->semilla') where identificacion='$id'";
					$cambio=$this->db->query($user);
					if ($cambio) 
					{
						echo "<script>alert('Cambio exitoso')</script>";
						$quitar_cod="DELETE from historial where descripcion like '%$cod%'";
						$trae2=mysqli_fetch_array($quitar_cod);
					}
				}
			}
		}
	}
}

 ?>