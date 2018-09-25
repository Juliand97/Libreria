<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Editorial</title>
	<link rel="stylesheet" href="../../Vista/css/editoriales/formulari.css">
	<script src="../../Vista/js/validacion datos/editoriales/validar_editorial.js"></script>
</head>
<body oncontextmenu="return false;">
	<form action="" method="post" onsubmit="return campos();">
		<input type="text" name="cod" id="cod" placeholder="Codigo postal" minlength="4" onkeypress="return c_isbn(event);">
		<input type="text"  name="nom"  id="nom" placeholder="Nombre de la editorial" minlength="2" onkeypress="return edit(event);">
		<input type="submit" name="envio" value="Envio">
	</form>
	<form action="../../Vista/menu/menu_consulta.php">
		<input type="submit" value="Regresar al menu registros y consultas">
	</form>
</body>
</html>