<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../Vista/css/cant/cant.css">
		<script src="../../Vista/js/validacion datos/autor/validar_autor.js"></script>	
		<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 		<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
 		<title>Registro de cantidades</title>
	</head>
	<body>
		<form action="" method="post" class="form">
			<input type="text" name="lib" placeholder="ISBN del libro" class="lib" required="required" onkeypress="return textos(event)">
			<br>
			<input type="text" name="cant" placeholder="¿Cuantos libros llegaron?" class="cant" required="required" onkeypress="return numeros(event)">
			<input type="submit" name="envia" value="Agregar cant" class="envia">
		</form>

		<form action="../libros/libros_con_ctrl.php" class="form2">
		<input type="submit" value="Regresar a consulta de libros" class="envio2">
		</form>
	</body>
</html>
