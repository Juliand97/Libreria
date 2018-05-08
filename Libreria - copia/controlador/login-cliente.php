<?php
session_start();
include "base_de_datos.php";
if(isset ($_POST['submit']))
	session_start();
{	$a= $_POST['name'];
	$b= $_POST['contraseña'];
	//$b=password_hash($b,password_default);//aun no se ha encriptado en este lado porque el atributo de html de password no deja visible la contraseña 
	$_SESSION['usuario']=$a;
	$_SESSION['pass']=$b;
	$consulta=mysqli_query($con,"SELECT * FROM clientes WHERE correo='$_SESSION[usuario]' AND identificacion='$_SESSION[pass]' ");//consulta
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


?>