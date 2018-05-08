<?php
session_start();//variable de sesion permite mantener una sesion activa
include "base_de_datos.php";
if(isset ($_POST['submit']))
{	$a= $_POST['name'];
	$b= $_POST['contraseña'];
	$_SESSION['usuario']=$a;
	$_SESSION['pass']=$b;
	$consulta=mysqli_query($con,"SELECT * FROM administradores WHERE Usuario='$a' AND contrasena='$b' ");
	$fila = mysqli_fetch_array($consulta);//traer datos de mysql lineas 12,13,14.
	$usuario = $fila['Usuario'];
	$contrasena = $fila['contrasena'];
	if ($_SESSION['usuario']== $usuario && $_SESSION['pass']==$contrasena)
	{
		$cont=mysqli_fetch_row($consulta);//contador de campos
		if (mysqli_num_rows($consulta)>0)//si la consulta tiene como resultado algo mayo
		{
			echo "<Script>
			alert('Usuario o contraseña validos') 
			alert('Bienvenido:   '+'$a')
			window.location.replace('../vista/principal.php')
			</script>";
		}
	}
	else
	{
		echo "<Script>
		alert('Usuario o contraseña invalidos  por favor intentelo de nuevo') 
		window.location.replace('../vista/login-index.php')
		</script>";
	}	
}
?>