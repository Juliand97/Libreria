<?php
if (isset($_GET['eliminar']))
{
	$borrar_cat= $_GET['eliminar'];
	$borrar= "DELETE FROM `categorias` WHERE idcategoria='$borrar_cat'";
	$ejecutar= mysqli_query($con, $borrar);
	
	if($ejecutar)
	{
		echo "<script> alert ('Registro borrado borrado')
		window.location.replace('consulta(mod).php')</script>";
	}
}
?>
