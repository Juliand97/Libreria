<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Edicion de libros</title>
	</head>
	<body>
		<form action="" method="POST">
			<p align="center">Actualización de datos</p>
			<table  border=1>
				<tr>
					<td>
						<p>ISBN</p>
						<input type="text" name="isb" value="<?php echo $edicion['isbn']; ?>">
						<input type="hidden" name="oculto" value="<?php echo $edicion['isbn']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<p>Libro</p>
						<input type="text" name="libr" value="<?php echo $edicion['libro']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<p>Fecha</p>
						<input type="DATE" name="fech" value="<?php echo $edicion['fecha']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<p>Editorial</p>
						<select name=edito>
							<?php
								$info=$e->lista();
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<p>Categoria</p>
						<select name="cat">
							<?php
								$info1=$c->lista();
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<p>Autor</p>
						<input type="text" name="auto" value="<?php echo $edicion['autor']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<p>Pais de origen</p>
						<input type="text" name="pais_de_aut" value="<?php echo $edicion['pais_de_autor']; ?>">
					</td>
				</tr>
				<tr>
					<td>
						<p>Dispobilidad</p>
						<select name="estado">
							<option>Disponible</option>
							<option>Vendido o reservado</option>
						</select>
					</td>
				</tr>
			</table>

			<table>
				<tr>
					<td>
						<input type="submit" name="actualizar" value="Actualizar datos" class="boton3">
					</td>
				</tr>
			</table>
		</form>	
	</body>
</html>