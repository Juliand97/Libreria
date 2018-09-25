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
		<script src="../../Vista/js/validacion datos/libros/validar_libro.js">
		</script>
	</head>
	<body oncontextmenu="return false;" >
		<form method="POST" action="" onsubmit="return validar_libro();">
			<table width="190" border=1 class="table">
				<tr>
					<td>
						<p>ISBN</p>
						<input type="text" name="v1" id="isbn" placeholder="ISBN" autofocus  minlength="9"  onkeypress="return c_isbn(event);">
					</td>
				</tr>
				<tr>
					<td>
						<p>Libro</p>
						<input type="VARCHAR" name="v2" id="libro" placeholder="Libro"  autofocus  minlength="2" onkeypress="return c_libro(event);" >
					</td>
				</tr>
				<tr>
					<td>
						<p>Fecha</p>
						<input type="DATE" name="v3" id="fecha" placeholder="Fecha"  autofocus>
					</td>
				</tr>
				<tr>
					<td>
						<p>Editorial</p>
						<select name="edit" id="edit">
							<?php $trae=$e->lista();?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<p>Categoria</p>
						<select name="cat" id="cat">
							<?php $trae1=$c->lista(); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<p>Autor</p>
						<input type="VARCHAR" name="v4" id="autor" placeholder="nombre del autor" autofocus onkeypress="return c_autor(event);" >
					</td>
				</tr>
				<tr>
					<td>
						<p>País de Autor</p>
						<input type="VARCHAR" name="v5" id="p_autor" placeholder="País de autor"  autofocus onkeypress="return c_autorp(event);">
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