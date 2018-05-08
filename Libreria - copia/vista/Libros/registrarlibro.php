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
		<title>Registrar Libros</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="reglibro.css">
	</head>
	<body text="#FFFFFF">
		<p align="center">Registro de libros</p>
		<form method= "post" action="../../modelo/Libros/registrarlibro1.php">
			<Table border = "1px">
				<tr>
				  <td>&nbsp&nbsp&nbsp ISBN Libro:</td>
					<td><input type = "int" name = "a1"></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp  Libro:</td>
					<td><input type = "varchar" name = "b1"></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp Fecha:</td>
					<td><input type = "date" name = "c1"></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp Editorial:</td>
					<td><input type = "varchar" name = "d1"></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp Categoría:</td>
					<td><input type = "varchar" name = "e1"></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp Autor:</td>
					<td><input type = "varchar" name = "f1"></td>
				</tr>
				<tr>
					<td>&nbsp&nbsp&nbsp País de autor:</td>
					<td><input type = "varchar" name = "g1"></td>
				</tr>
			</Table> 
			<br>
			<input type="submit" name="guardar" id="guardar" value="Enviar" class="boton"> 
			<br>
		</form>
		<form action="../menureg.php" method="post">
			<input type="submit" value="Menu registro y consulta" class="boton">
		</form>
	</body>
</html>