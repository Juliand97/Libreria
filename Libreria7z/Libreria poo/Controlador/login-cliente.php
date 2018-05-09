<?php
session_start();
include ("controlador/base_de_datos.php");
require_once("controlador/vendor/autoload.php");
require_once("controlador/cuentas de google.php");
if(isset ($_POST['submit']))
{
	$log_c= new Login_Cliente($_POST['name'],$_POST['contraseña']);
	$acceso=$log_c->A_cliente();
}	

Class Login_Cliente 
{
	Public $user;
	Public $password;
	public function __construct()
	{
		$this->user=$_POST['name'];
		$this->password=$_POST['contraseña'];
	}
	Public function A_cliente()
	{
		$_SESSION['usuario']=$this->user;
		$_SESSION['pass']=$this->password;
		$inten= new Conexion();
		$con=$inten->conm();
		$consulta=mysqli_query($con,"SELECT * FROM clientes WHERE correo='$_SESSION[usuario]' AND identificacion='$_SESSION[pass]' ");
		while($fila = mysqli_fetch_array($consulta))
		{
			$identificacion = $fila['identificacion'];
			$nombre = $fila['nombre'];
			$correo = $fila['correo'];}
			$cont=mysqli_fetch_row($consulta);
			if (mysqli_num_rows($consulta)>0)
			{
				echo "<Script>
				alert('Usuario o contraseña validos') 
				alert('Bienvenido:   '+'$nombre')
				window.location.replace('../vista/pag_cliente.php')
				</script>";
			}
			else
			{
				echo "<Script>
				alert('Usuario o contraseña invalidos  por favor intentelo de nuevo') 
				window.location.replace('../vista/login cliente.php');
				</script>";
			}
	}
}	//$b=password_hash($b,password_default);//aun no se ha encriptado en este lado porque el atributo de html de password no deja visible la contraseña 
	
?>