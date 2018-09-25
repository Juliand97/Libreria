<?php 
#include("../../controlador/seguridad/inter/seguridad_cliente.php");
?>	
<html>
	<head>
		<link rel="stylesheet" href="../../Vista/css/busqueda/buscar.css">
		<script src="../../Vista/js/validacion datos/busqueda_visitante/validacion.js"></script>
		<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
 	
 	<title>Busqueda y Reservas</title>
	</head>
	<body oncontextmenu="return false;">
		<form action="" method="post" class="form" onsubmit="return validar();">
			<p>Por favor diligencie los siguientes datos</p>
			<p>Nombre del libro</p><input type="text" placeholder="Nombre del libro" id="libro"  name="libro" autofocus required onkeypress="return caracteres(event);">
			<br><br><input type="submit" value="Solicitar" name="enviar" class="envio">
		</form>
		<form action="../../Vista/pag_cliente.php" class="form2">
			<input type="submit" value="Regresar al menu principal" class="envio2">
		</form>
	</body>
</html>