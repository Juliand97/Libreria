<?php include("../../controlador/seguridad/seguridad_admin.php"); ?>
 <!DOCTYPE html>
 <html>
	 <body>

	 	<form action="../../modelo/libros/consulta_cant.php" method="post">
	 		<input type="text" name="isbn" placeholder="¿que libro quieres consultar?">
	 		<input type="submit" name="consulta" value="Ver info.">
	 		
	 	</form>	 
	 </body>
	 </html>