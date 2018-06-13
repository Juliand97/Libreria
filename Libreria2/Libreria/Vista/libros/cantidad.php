<?php include("../../controlador/seguridad/seguridad_admin.php"); ?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cant.css">
		
	</head>
	<body>
		<form action="../../modelo/libros/cant.php" method="post" class="form">
			<input type="text" name="lib" placeholder="ISBN del libro" class="lib" require>
			<br>
			<input type="text" name="cant" placeholder="¿Cuantos libros llegaron?" class="cant" require>
			<input type="submit" name="envia" value="Agregar cant" class="envia">
		</form>
		<form action="consulta_lib.php" class="form2">
		<input type="submit" value="Regresar a consulta de libros" class="envio2">
		</form>
	</body>
</html>