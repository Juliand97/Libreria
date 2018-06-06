<?php
session_start();//variable de sesion permite mantener una sesion activa
include ("base_de_datos.php");
if(isset ($_POST['submit']))
{		
	$logeo= new Login($_POST['name'],$_POST['contraseña']);
	$entrar=$logeo->Acceso();
}

class Login 
{
	Public $a;
	Public $b;
	public $cod_en;
	
	
	Public function __construct ()
	{
		$this->a=$_POST['name'];
		$this->b=$_POST['contraseña'];
		$this->cod_en="2018";
	}

	
	public function Acceso()
		{
			
			$_SESSION['admin']=0;
			$_SESSION['cliente']=0;
			$_SESSION['proveedor']=0;
			$_SESSION['default']=0;

			
			$inten= new Conexion();
			$con=$inten->conm();	
			
			$consulta="SELECT * FROM usuarios WHERE nombre='$this->a' and contrasena=aes_encrypt($this->b,'2018') ";
			echo $consulta;
			$ejecutar=mysqli_query($con,$consulta);

			$fila= mysqli_fetch_array($ejecutar);
			$id=$fila['identificacion'];
			$identificacion = $fila['nombre'];
			$pass=$fila['contrasena'];
			$_SESSION['id']=$id;
			$_SESSION['usuario']=$identificacion;
			$_SESSION['pass']=$pass;

			$consulta2="SELECT identificacion,nombre,contrasena,roles.u_rol,roles.t_permiso FROM usuarios INNER JOIN roles INNER JOIN permisos WHERE identificacion='$id'and id_usuario=identificacion and u_rol=id_rol";
			$ejecutar2=mysqli_query($con,$consulta2);
			while ($fila2=mysqli_fetch_array($ejecutar2))
			{
				$t_permiso=$fila2['t_permiso'];
				if ($t_permiso=="admin")
				 {
					$_SESSION['admin']=1;
					$_SESSION['default']=1;

				}
				if ($t_permiso=="cliente")
			 	{
					$_SESSION['cliente']=1;
				}
				if ($t_permiso=="proveedor")
			 	{
					$_SESSION['proveedor']=1;
					$_SESSION['default']=1;

				}
			}

			if(is_null($identificacion) or is_null($pass))
			{
				echo "<script>
					alert('Usuario o contraseña invalidos.');
					window.location.replace('../Vista/login-index.php')
				</script>";	
			}

			if (isset($_SESSION['usuario'])) 
			{
				header("location:../Vista/pag_cliente_log.php");
			}

			/*$contrasena=$fila['contrasena'];
			$privilegios=$fila['privilegios'];	*/			
			
		}
}
?>