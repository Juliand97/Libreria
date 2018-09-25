<?php 
/*Aquí se puede ver el uso de las variables de sesion en consultas inner join y el uso de ob_start()
Glosario
ob_start()= esta fn se utiliza en caso de que se presente uno o mas header() para evitar un errores o continuar con el flujo de ejecución*/
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
	
	
		$consulta2="SELECT identificacion,p_nombre,contrasena,rol.u_rol,rol.t_permiso FROM usuario INNER JOIN rol INNER JOIN permiso WHERE identificacion='$_SESSION[id]'and id_usuario=identificacion and u_rol=id_rol";
		#echo $consulta2;
		$ejecutar2=$this->db->query($consulta2);
		while ($fila2=mysqli_fetch_array($ejecutar2))
		{
			echo "<option name='$fila2[t_permiso]'>".$fila2['t_permiso']."</option>";	
		}
	}
	
}
 ?>