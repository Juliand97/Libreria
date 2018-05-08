<?php
session_start();
include "base_de_datos.php";
if(isset ($_POST['submit']))
{	$a= $_POST['name'];
	$b= $_POST['contraseña'];
	$consulta=mysqli_query($con,"SELECT * FROM clientes WHERE correo='$a' AND identificacion='$b' ");
	
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
		window.location.replace('principal.php')
		</script>";
	}
	else
	{
	echo "<Script>
	alert('Usuario o contraseña invalidos  por favor intentelo de nuevo') 
	window.location.replace('login-index.php')
	</script>";
	}
}


?>