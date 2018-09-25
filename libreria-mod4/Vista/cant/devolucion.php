<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<link rel="stylesheet" href="dev.css">
	<style>
			.boton{
			background:rgba(0,0,0,0.4);
			color: #fff;
			margin: 0 35%;
		}

	</style>
	<body>
		<div class="todo">
		<form action="../../modelo/cant/devolucion.php" class="form" method="post">
			<input type="text" name="id" id="id_dev" placeholder="id del libro devuelto">
			<input type="text" name="dev" placeholder="Cant de libros que regresaron" class="dev">
			<input type="submit" name="envio" value="Regresar libro" class="envio">
			<br>
			<br>
			<br>
			
		</form>
		<form method="post" action="../menureg.php">
			<input type="submit" value="Volver a registros y consultas" class="boton">
			</form>
	</div>
	</body>
</html>
