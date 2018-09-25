<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="../../Vista/css/cant/cons_cant.css">
 </head>
	 <body>
	 	<form action="" method="post" class="form">
	 		<input type="text" name="isbn" placeholder="¿que libro quieres consultar?" class="isbn">
	 		<input type="submit" name="consulta" value="Ver info." class="cons">
	 		
	 	</form>	 
	 	<a href="../../Vista/menu/menu_consulta.php"  class="enlace">Volver al menú principal</a>
	 </body>
	 </html>

	 <!--
	 	modificaciones 
	 	imagenes que faltaban y footer
	 	falta el bonito login