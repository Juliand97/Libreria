<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../Vista/css/categorias/edit.css">
	<link rel="stylesheet" type="text/css" href="../../Vista/css/categorias/consultas.css">
	<script src="../../Vista/js/validacion datos/autor/validar_autor.js"></script>	
</head>
<body oncontextmenu="return false">
	<form action="" method="post">
		
		<table  border="1" class="tablas" >
			<th><p>Nombre categoria</p></th>
			<th>
				<input type="hidden" name="id" value="<?php echo $datos_act['id_cat'] ?>" >
				<input type = "text" name="nombre" class="nombres" value="<?php echo $datos_act['categoria']; ?>" onkeypress="return textos(event)">
			</th>
			<th><input type="submit" name="actualiza" value="Actualizar datos" class="actualiza"></th>
		</table>
		
	</form>
</body>
</html>