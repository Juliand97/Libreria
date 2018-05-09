<?php
include("../../controlador/seguridad pags.php");
require_once("../../controlador/tiempo_de_sesion.js");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();
 ?>
<html>
	<head>
		<p align="center">Autores</p>
		<meta charset="utf-8">
		<link rel="stylesheet" href="insertar.css">
	</head>
<body>
	<form method="post" action="../../modelo/autores/fp.php" class="form">
	<table  border=1 class="table">
		<tr><td><p>No.Registro</p><br>
			<input type = "text" name="id" placeholder="No.registro"><br></td></tr>
		<tr>
		<td><p>Nombre</p>
			<input type = "text" name="nombrea" placeholder="nombre"><br></td>
		</tr>
		<tr><td><p>Apellido</p>
			<input type = "text" name="apellidoa" placeholder="Apellido"></td></tr>
		<tr><td>
		<br>
		<tr><td><p>Nacionalidad</p><br>
			<input type = "text" name="nac" placeholder="nacionalidad"></td></tr>
		<tr><td>
		<br>
		<tr><td><p>Fecha Nacimiento</p><br>
			<input type = "date" name="fechan" placeholder="fechan"><br></td></tr>
		<tr><td><p>Estado Autor</p>
			<input type="text" name="estadoa" placeholder="Estado">
		<tr><td><p>No.Obras</p>
			<input type="text" name="obras" placeholder="obras">
		<tr><td><br>
			<input type = "Submit" name="insert" value="Enviar registro" class="boton1"/>
		</form>
		</td></tr><tr>
		<td>
			<br>
			<form method="post" action="../menureg.php">
				<input type="submit" value="Volver a registros y consultas" class="boton2">
			</form>
		</tr></td>
	</table>
</body>
</html>


 <!--
	
	if($enviar)
	{echo "<script> alert ('hecho')</script>";*/
//echo "<script>window.location.replace('consulta.php')</script>";
?>-->