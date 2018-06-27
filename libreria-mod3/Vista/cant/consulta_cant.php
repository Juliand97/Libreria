<?php include("../../controlador/seguridad/inter/seguridad_admin.php"); ?>

 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="cons_cant.css">
 </head>
	 <body>
	 	<form action="../../modelo/cant/consulta_cant.php" method="post" class="form">
	 		<input type="text" name="isbn" placeholder="¿que libro quieres consultar?" class="isbn">
	 		<input type="submit" name="consulta" value="Ver info." class="cons">
	 		
	 	</form>	 
	 </body>
	 </html>