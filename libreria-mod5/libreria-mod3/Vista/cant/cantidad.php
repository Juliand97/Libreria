<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../Vista/css/cant/cant.css">
		
	</head>
	<body>
		<form action="" method="post" class="form">
			<input type="text" name="lib" placeholder="ISBN del libro" class="lib" required="required">
			<br>
			<input type="text" name="cant" placeholder="¿Cuantos libros llegaron?" class="cant" required="required">
			<input type="submit" name="envia" value="Agregar cant" class="envia">
		</form>

		<form action="../libros/consulta_lib.php" class="form2">
		<input type="submit" value="Regresar a consulta de libros" class="envio2">
		</form>
	</body>
</html>
