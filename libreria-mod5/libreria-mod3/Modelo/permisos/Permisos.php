
<?php 
 ob_start();
class Permisos
{
	Private $db;
	public function __construct()
	{
	require_once '../Modelo/Conexion.php';
		$this->db=Conexion::conm();
	}
	public function permisos()
	{
		$permisos=array();
	
	
		$consulta2="SELECT identificacion,p_nombre,contrasena,roles.u_rol,roles.t_permiso FROM usuarios INNER JOIN roles INNER JOIN permisos WHERE identificacion='$_SESSION[id]'and id_usuario=identificacion and u_rol=id_rol";
		#echo $consulta2;
		$ejecutar2=$this->db->query($consulta2);
		while ($fila2=mysqli_fetch_array($ejecutar2))
		{
			echo "<option name='$fila2[t_permiso]'>".$fila2['t_permiso']."</option>";	
		}
	}
	
}
 ?>