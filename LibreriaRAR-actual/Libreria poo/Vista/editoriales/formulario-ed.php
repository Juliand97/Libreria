<?php
	include("../../controlador/seguridad pags.php");
	require_once("../../controlador/tiempo_de_sesion.js");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();  
?> 

<html>
<head>
    <title>Registrar editoriales</title>
	<meta charset="uft-8">
	<link rel="stylesheet" href="formulari.css">
</head> 
<body text="#FFFFFF">
	<p align="center">Registro de editoriales</p>
<form method= "post" action="../../modelo/editoriales/formulario.php">
	<Table border = "1px">
	<tr>
		<td>Codigo postal:</td>
		<td><input type = "int" name = "cod"></td>
	</tr>
	<tr>
		<td>nombre editorial:</td>
		<td><input type = "varchar" name = "nom_e"></td>
	</tr>
	<tr>
		<td>Ubicacion:</td>
		<td><input type = "varchar" name = "ubi"></td>
	</tr>
	<tr>
		<td>Telefono:</td>
		<td><input type = "int" name = "tel"></td>
	</tr>
	<tr>
		<td>correo:</td>
		<td><input type = "email" name = "email"></td>
	</tr>
	<tr>
		<td>PBX:</td>
		<td><input type = "int" name = "pbx"></td>
	</tr>
	<tr>
		<td>Jefe editorial:</td>
		<td><input type = "varchar" name = "jefe"></td>
	</tr>
	<tr>
		<td>Fecha creacion:</td>
		<td><input type = "date" name = "fecha"></td>
	</tr>
	<br>
	<input type="submit" name="insert"  value="Enviar" class="boton1"> 
	</form>
	<form action="../menureg.php" method="post">
	<input type="submit" value="Menu registro y consultas" class="boton2">

</form>
</body>
</Table> 
</html>