<?php 
/*En esta se podrán ver el uso de  session_start así como las consultas inner join que en el class Busqueda fue (o es depende el orden de lectura ) explicada y una nueva fn de mysql llamada aes_encrypt
Glosario
session_start()= fn la cual permite usar varibles $_SESSION[] las cuales son generalmente utilizadas en los inicios de sesion
aes_encript()= fn de mysql la cual permite encriptar en 128 bits los datos ingresados a ella esta tiene o requiere dos cosas esta es de doble sentido 
	1) el dato a encriptar 
	2) una semilla o dato adicional que será conducido el dato para ser encriptado y donde se manejará el doble sentido de esta fn    */
session_start();//variable de sesion permite mantener una sesion activa
 ?>
<?php 
Class Login
{
	Private $db;
	
	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();			
	}

	public function logueo($id,$pass)
	{

		$consulta2="SELECT identificacion,p_nombre,contrasena,estado,rol.u_rol,rol.t_permiso FROM usuario INNER JOIN rol INNER JOIN permiso WHERE identificacion='$id'and id_usuario=identificacion and u_rol=id_rol ";
		#echo $consulta2;
		$ejecutar2=$this->db->query($consulta2);
		while($fila2=mysqli_fetch_array($ejecutar2))
		{
			$t_permiso=$fila2['t_permiso'];
			$estado=$fila2['estado'];
			
		}
		#echo $t_permiso;
		if ($t_permiso=="admin")
		{
			require_once '../../Modelo/login/Administrador.php';
			$admin= new Administrador;
			$ingreso=$admin->acceso_admin($id,$pass);
		}

		if ($t_permiso=="cliente")
		{
			require_once '../../Modelo/login/Cliente.php';
			$cliente= new Cliente;
			$ingreso2= $cliente->acceso_cliente($id,$pass);
		}

		if ($t_permiso==null)
		{
			#echo "aqui es donde esta el error";
			header("Location: ../../Vista/pag_visitante.php");
		}
	}

	public function logout()
	{
		$_SESSION['admin']=0;
		$_SESSION['default']=0;	
		$_SESSION['cliente']=0;
		$_SESSION['proveedor']=0;
		header("location:../../Vista/pag_visitante.php");
	}	
}
 ?>