<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consulta de editoriales</title>
	<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../../Vista/css/editoriales/consulta.css">
	<script>
	function elimina(elim,string)
		{
			if(confirm ("¿Desea eliminar el registro?"))
			{
				window.location.href='editoriales_con_ctrl.php?elim_ed=' +elim+ '';
				/*return true;*/
			}

		}
		function edit(cons,string)
		{
			window.location.href='editoriales_con_ctrl.php?edit_ed= ' +cons+ '';
		}
	</script>
</head>
<body>
	<table border="1px" class="table">
			  	<th>Codigo_postal</th>
				<th>Nombre</th>
				<th>Editar</th>
				<th>Eliminar</th>
		<?php 
			foreach ($consulta as $info)
			{
		 ?>
		<tr>
			<td><?php echo $info['codigo_postal']; ?></td>
			<td><?php echo $info['nombre_e']; ?></td>
			<td><input type="BUTTON"  onclick="edit('<?php echo $info['nombre_e']; ?>')" name="consulta" value="Editar" class="boton1"></td>
			<td><input type = "BUTTON" onclick="elimina('<?php echo $info['nombre_e']; ?>')" name = "Eliminar" value = "Eliminar" class="boton1"></td>
		</tr>
		<?php 
			}
		 ?>
	</table>
	<form action = "editoriales_ctrl.php" method="post"  class="boton1">
		<input type="submit" value="Ir a registro" class="input">
	</form>
	<form action = "../../Vista/menu/menu_consulta.php" method="post"  class="boton1">
		<input type="submit" value="Volver a registro y consulta" class="input">
	</form>
</body>
</html>