<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar libros</title>
	<link rel="stylesheet" href="../../Vista/css/libros/estilo_con.css">
		<script>
	function elimina(elim)
		{
			if(confirm ("¿Desea eliminar el registro?"))
			{
				window.location.href='libros_con_ctrl.php?elim_lib=' +elim+ '';
				return true;
			}

		}
		function edit(cons)
		{
			window.location.href='libros_con_ctrl.php?edit_lib= ' +cons+ '';
		}
	</script>
</head>
<body>
	<table border="1px">
		<th>ISBN</th>
		<th>Libro</th>
		<th>Fecha</th>
		<th>Editorial</th>
		<th>Categoria</th>
		<th>Autor</th>
		<th>País de autor</th>
		<th>Disponibilidad</th>
		<th>Editar</th>
		<th>Eliminar</th>
			<?php foreach ($consultar as $registro)
			 {	
			?>
		<tr>
			<td><?php echo $registro['isbn']; ?></td>
			<td><?php echo $registro['libro']; ?></td>
			<td><?php echo $registro['fecha']; ?></td>
			<td><?php echo $registro['editorial']; ?></td>
			<td><?php echo $registro['categoria']; ?></td>
			<td><?php echo $registro['autor']; ?></td>
			<td><?php echo $registro['pais_de_autor']; ?></td>
			<td><?php echo $registro['compra']; ?></td>
			<td><input type="BUTTON"  onclick="edit(<?php echo $registro['isbn']; ?>)" name="consulta" value="Editar" class="boton1"></td>
			<td><input type = "BUTTON" onclick="elimina(<?php echo $registro['isbn']; ?>)" name = "Eliminar" value = "Eliminar" class="boton1"></td>
		</tr>
			<?php } ?>
	</table>
	<table >
	 <!--botones de existencias, registro y menú--> 
	 	<form action="libros_ctrl.php" method="POST" >
	 		<input type="submit" value="Ir a registro" class="boton2">
	 	</form>

	 	<form action="../../Vista/menu/menu_consulta.php" method="POST">
			<input type="submit" value="Volver a registro y consulta" class="boton2">
		</form>

		<form action="../cant/cant_ctrl.php">
			<input type="submit" name="add" value="Agregar Cant." class="boton2" >
		</form>	

		<form action="../cant/consulta_cant_ctrl.php">
			<input type="submit" name="add" value="existencias." class="boton2" >
		</form>	
	 </table>
</body>
</html>