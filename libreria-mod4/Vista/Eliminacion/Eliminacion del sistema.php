<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
</head>
<body>
	<div class="todo">
		<form action="../../modelo/eliminacion/eliminar_p.php" method="post" class="form">
			<select name="lista" id="lista" class="lista">
				<option value="Autores">Autores</option>
				<option value="Categorias">Categorias</option>
				<option value="Editoriales">Editoriales</option>
				<option value="Libros">Libros</option>
				<option value="Usuarios">Usuarios</option>
			</select>
			<input type="submit" value="envio" name="envio" class="envio">
		</form>
	</div>
</body>
</html>