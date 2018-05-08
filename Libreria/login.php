<?php
session_start();
	$con = mysqli_connect("localhost","root","" ,"libreria") or die ("Error");


if(isset ($_POST['submit']))
	$a= $_POST['name'];
	$b= $_POST['contraseña'];
{	$consulta="SELECT * FROM `administradores`";
	$ejecutar=mysqli_query($con,$consulta);
		$fila= mysqli_fetch_array($ejecutar);
			$nombre= ['Usuario'];
			$pass=['contraseña'];
	//if($fila==true){echo "datos extraidos";}
	
	if ($a == $fila)
	{
		echo "algo esta mal";
		
	}
	/*else
	{
	echo "<Script> alert('usuario encontrado') </script>";
	//header("location:login.html");
	}*/
}


?>