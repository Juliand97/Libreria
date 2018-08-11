<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Editorial</title>
	<link rel="stylesheet" href="../../Vista/css/editoriales/formulari.css">
</head>
<body>
	<form action="" method="post">
		<input type="text" name="cod" placeholder="Codigo postal" minlength="4">
		<input type="text" name="nom" placeholder="Nombre de la editorial" minlength="2">
		<input type="submit" name="envio" value="Envio">
	</form>
	<form action="../../Vista/menu/menu_consulta">
		<input type="submit" value="Regresar al menu registros y consultas">
	</form>
</body>
</html>