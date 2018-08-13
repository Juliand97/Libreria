<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<html>
	<head>
		<p align="center">Autores</p>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../Vista/css/autores/insertar.css">	
	</head>
<body>
	<form method="post" action="" class="form">
	<table  border=1 class="table">
		
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
		<tr><td><label>Estado Autor</label>
			<br>
			<select name="estadoa">
				<option >--Seleccione--</option>
				<option >Activo</option>
				<option >Retirado</option>
			</select>
		<tr><td><p>No.Obras</p>
			<input type="text" name="obras" placeholder="obras">
		<tr><td><br>
			<input type = "Submit" name="insert" value="Enviar registro" class="boton1"/>
		</form>
		</td></tr><tr>
		<td>
			<br>
			<form method="post" action="../../Vista/menu/menu_consulta">
				<input type="submit" value="Volver a registros y consultas" class="boton2">
			</form>
		</tr></td>
	</table>
</body>
</html>