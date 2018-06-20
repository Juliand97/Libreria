<?php 
include("../../controlador/seguridad/inter/seguridad_cliente.php");
?>	
<html>
	<head>
	<link rel="stylesheet" href="buscar.css">
	<style>
	

	</style>
	</head>
	<body>
		<form action="../../modelo/busqueda/buscar_libro.php" method="post">
			<p>Por favor diligencie los siguientes datos</p>
			<p>Nombre del libro</p><input type="text" placeholder="Nombre del libro" id="libro"  name="libro" autofocus required>
			<br><br><input type="submit" value="Solicitar" name="enviar" class="envio">
		</form>
		<form action="../pag_cliente_log.php" class="form2">
		<input type="submit" value="Regresar al menu principal" class="envio2">
		</form>
	</body>
	
</html>