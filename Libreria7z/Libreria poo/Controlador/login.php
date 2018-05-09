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
			$_SESSION['usuario']=$this->a;
			$_SESSION['pass']=$this->b;
			$inten= new Conexion();
			$con=$inten->conm();	
			$consulta="SELECT * FROM usuarios WHERE nombre='$this->a' and contrasena=aes_encrypt($this->b,'2018') and privilegios='administrador'";
			$ejecutar=mysqli_query($con,$consulta);
			$fila= mysqli_fetch_array($ejecutar);
			$identificacion = $fila['nombre'];
			/*$contrasena=$fila['contrasena'];
			$privilegios=$fila['privilegios'];	*/			
			if ($ejecutar==true)
			{	
					echo "<Script>
					alert('Usuario o contraseña validos') 
					alert('Bienvenido:   '+'$identificacion')
					window.location.replace('../Vista/principal.php')
					</script>";
			
			}
			else
			{ 
				echo "<Script>
				alert('Usuario o contraseña invalidos  por favor intentelo de nuevo') 
				window.location.replace('../vista/login-index.php')
				</script>";
				// //
			}	

		}
}
?>