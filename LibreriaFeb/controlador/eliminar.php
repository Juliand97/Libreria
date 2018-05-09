<?php
	if(is_null($usuario) )
	{	
		
		echo "<Script>
		alert('Lo sentimos debe iniciar sesion para poder continuar') 
		window.location.replace('../login-index.php')
		</script>";
		
	}
	else
	{
	
		
	}
 ?>
<?php
if (isset($_GET['eliminar']))
{
	$borrar_c= $_GET['eliminar'];
	$borrar= "DELETE FROM `clientes` WHERE identificacion='$borrar_c'";
	$ejecutar= mysqli_query($con, $borrar);
	
	if($ejecutar)
	{	
		
		echo "<script> alert ('Cliente borrado')
		window.location.replace('consulta.php')</script>";
	}
}
?>
