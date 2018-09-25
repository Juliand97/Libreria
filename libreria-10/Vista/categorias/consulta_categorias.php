<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../Vista/css/categorias/consultas.css">
	<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
 	<title>Consultar Categoria</title>
	<script language="JavaScript">
		function elimina(elim)
		{
			if(confirm ("¿Desea eliminar el registro?"))
			{
				window.location.href='categorias_con_ctrl.php?elim_cat=' +elim+ '';
				return true;
			}

		}
		function edit(cons)
		{
			window.location.href='categorias_con_ctrl.php?edit_cat= ' +cons+ '';
		}
	</script>
</head>
<body>
	<table border="1" class="tabla">
		<th>Numero de registro</th>
		<th>Categoria</th>
		<th>Editar</th>
		<th>Eliminar</th>
		<tr>
			<?php 
				foreach ($consulta as $reg)
				{
			 ?>

			<td><?php echo $reg['id_cat']; ?></td>
			<td><?php echo $reg['categoria']; ?></td>
			<td>
				<input type="BUTTON"  onclick="edit(<?php echo $reg['id_cat']; ?>)" name="consulta" value="Editar" class="boton2">
			</td>
			<td>
				<input type="BUTTON" onclick="elimina(<?php echo $reg['id_cat']; ?>)" name="Eliminar" value="Eliminar" class="boton3">
			</td>
		
			
		</tr>
		<?php } ?>
	</table>
	<form action="../../Vista/menu/menu_consulta.php">
		<input type="submit" value="Menu registro y consulta" class="botonmen">
	</form>
	<form action="categorias_ctrl.php">
		<input type="submit" value="Registro de categoria"class="botonmen">
	</form>
</body>
</html>