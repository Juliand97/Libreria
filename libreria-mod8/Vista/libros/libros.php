<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>

<!DOCTYPE html>
<html>
	<title>Registrar libros</title>
	<head>
		<meta charset="UTF-8">
		<p>Registro de libros</p>
		<link rel="stylesheet" type="text/css" href="../../Vista/css/libros/estilo_reg_li.css">
	</head>
	<body>
		<form method="POST" action="">
			<table width="190" border=1 class="table">
				<tr>
					<td>
						<p>ISBN</p>
						<input type="BIGINT" name="v1" placeholder="ISBN"  autofocus required="required" minlength="9">
					</td>
				</tr>
				<tr>
					<td>
						<p>Libro</p>
						<input type="VARCHAR" name="v2" placeholder="Libro"  autofocus required="required" minlength="2">
					</td>
				</tr>
				<tr>
					<td>
						<p>Fecha</p>
						<input type="DATE" name="v3" placeholder="Fecha"  autofocus>
					</td>
				</tr>
				<tr>
					<td>
						<p>Editorial</p>
						<select name="edit">
						<?php $trae=$e->lista();?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<p>Categoria</p>
						<select name="cat">
						<?php $trae1=$c->lista(); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<p>Autor</p>
						<input type="VARCHAR" name="v4" placeholder="nombre del autor" autofocus required="required">
					</td>
				</tr>
				<tr>
					<td>
						<p>País de Autor</p>
						<input type="VARCHAR" name="v5" placeholder="País de autor"  autofocus>
					</td>
				</tr>	
				<tr>
					<td>
						<input type="SUBMIT" name="insert" value="Enviar registro" class="boton1">		
					</td>
				</tr>		
			</table>
		</form>	
		<form method="post" action="../../Vista/menu/menu_consulta.php">
			<input type="submit" value="Volver a registros y consultas" class="boton2">						
		</form>			
	</body>	
</html>
	
