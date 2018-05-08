<?php
	include("../../controlador/seguridad pags.php");
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
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="borrar.css">
	</head>
	<body>
		<p align="center">Borrar Libro</p>
		<p align="center">Ingrese el ISBN del libro que desea borrar</p>
		<form name="form1" method="post" action="../../modelo/Libros/borrarlibro1.php?tipo=registrar">
		  <table width="408" border="1">
			<tr>
			  <td>ISBN del Libro:</td>
			  <td><input type="bigint" name="isbn" id="isbn" ></td>
			</tr>
		  </table>
		   <input type="submit" name="Guardar" id="Guardar" value="Enviar"class="boton">
		</form>
	</body>
</html>
