<?php
	include("../../controlador/seguridad pags.php");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();
 ?><html>
<head>
<p align="center">Clientes</p>
<meta charset="utf-8">
<link rel="stylesheet" href="formulario.css">
</head>
<body text="#FFFFFF">
	<form method="post" action="../../modelo/clientes/fp.php"  >
	<table width="190" border=1>
	<tr><td><p>Identificacion</p><br>
	<input type = "text" name="doc" placeholder="identificacion"><br></td></tr>
	<tr>
	<td><p>Nombre</p>
	<input type = "text" name="nombre" placeholder="nombre completo"><br></td>
	</tr>
	<tr>
	<td><p>Correo electronico</p><br>
	<input type = "text" name="email" placeholder="email"></td><tr>
	<tr>
	<td><p>Contraseña</p><br>
	<input type = "password" name="pass" id="pass" placeholder="Contraseña"></td></tr>
	<tr><td>
	<br>
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