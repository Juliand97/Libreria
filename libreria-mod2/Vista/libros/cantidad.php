<?php include("../../controlador/seguridad/seguridad_admin.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<form action="../../modelo/libros/cant.php" method="post">
			<input type="text" name="lib" placeholder="ISBN del libro">
			<br>
			<input type="text" name="cant" placeholder="¿Cuantos libros llegaron?">
			<input type="submit" name="envia" value="Agregar cant">
		</form>
	</body>
</html>
