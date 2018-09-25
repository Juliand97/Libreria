<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../../Vista/css/cant/cons_cant.css">
 	<script src="../../Vista/js/validacion datos/autor/validar_autor.js"></script>	
 	<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
 	<title>Consultar cantidades</title>
 </head>
	 <body>
	 	<form action="" method="post" class="form">
	 		<input type="number" name="isbn" placeholder="ISBN del libro que deseas consultar" class="isbn" required="required" onkeypress="return numeros(event)">
	 		<input type="submit" name="consulta" value="Ver info." class="cons">
	 		
	 	</form>	 
	 	<a href="../../Vista/menu/menu_consulta.php"  class="enlace">Volver al menú principal</a>
	 </body>
	 </html>

	 <!--
	 	modificaciones 
	 	imagenes que faltaban y footer
	 	falta el bonito login