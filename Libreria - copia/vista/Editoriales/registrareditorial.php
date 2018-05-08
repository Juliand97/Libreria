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
    <title>Registrar editoriales</title>
	<meta charset="uft-8">
	<link rel="stylesheet" href="regeditorial.css">
</head>
<body>
	<p align="center">Registro de editoriales</p>
<form method= "post" action="../../modelo/Editoriales/registrareditorial1.php">
	<Table border = "1px">
	<tr>
		<td>Codigo postal:</td>
		<td><input type = "int" name = "a1"></td>
	</tr>
	<tr>
		<td>Ubicacion:</td>
		<td><input type = "varchar" name = "b1"></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><input type = "int" name = "c1"></td>
	</tr>
	<tr>
		<td>correo:</td>
		<td><input type = "email" name = "d1"></td>
	</tr>
	<tr>
		<td>PBX:</td>
		<td><input type = "int" name = "e1"></td>
	</tr>
	<tr>
		<td>Jefe editorial:</td>
		<td><input type = "varchar" name = "f1"></td>
	</tr>
	<tr>
		<td>Fecha creacion:</td>
		<td><input type = "date" name = "g1"></td>
	</tr>
</Table> 
	<input type="submit" name="guardar" id="guardar" value="Enviar" class="boton1"> 
</form>
<form action="../menureg.php" method="post">
	<input type="submit" value="Menu registro y consultas" class="boton1">
</form>
</body>
</html>