<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../Vista/reportes/filtros.css">
</head>
<body>
	<form action="../../Controlador/reportes/reportes_ctrl.php" method="post" class="reporte">
		<label>Generar reporte </label>
		<br>
		<select id="lista" name="lista">
			<option>Editorial</option>
			<option>Libro</option>
			<option>Historial</option>
			<option>Autor</option>
			<option>Usuario</option>
		</select>
		<br>
		<input type="image" src="../../Vista/img/excel2013.png" class="envio" >
	</form>
	
</body>
</html>