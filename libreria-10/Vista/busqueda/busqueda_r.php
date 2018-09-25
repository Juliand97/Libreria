<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/busqueda/busqueda_avanzado_r.css">
	<script src="../../Vista/js/validacion datos/autor/validar_autor.js"></script>	
	
	<script>
		function datos()
		{
			var id;
			var cant;
			id=document.getElementsByName('isbn')[0].value;
			cant=document.getElementsByName('cant')[0].value;
			window.location='busqueda_ctrl.php?id='+id+'&cant='+cant;
		}
	</script>

</head>
<body>
	
		
		
		<table border="1"  class="tabla" id="tabla">
			<th>Nombre del libro</th>
			<th>Cod isbn</th>
			<tr>
				<td>
					<?php echo $selec['libro']; ?>
				</td>

				<td>
					<?php echo $selec['isbn']; ?>
				</td>
			</tr>
			<th>Nombre del autor</th>
			<th>Fecha</th>
			<tr>	

				<td>
					<?php echo $selec['autor'];?>
				</td>

				<td>
					<?php echo $selec['fecha']; ?>
				</td>
			</tr>
			<th>Editorial</th>
			<th>Categoria</th>
			<tr>

				<td>
					<?php echo $selec['editorial']; ?>
				</td>

				<td>
					<?php echo $selec['categoria']; ?>
				</td>
			</tr>
			<th>Pais del autor</th>
			<th>Cantidad</th>
			<tr>
				<td>
					<?php echo $selec['pais_de_autor']; ?>
				</td>

				<td>
					<form action="javascript:datos()" method="post" >
						<input type="hidden" name="isbn" value="<?php echo $selec['isbn']; ?>">
					<input type="number" name="cant"  placeholder="Cantidad" required="required" onkeypress="return numeros(event)">
				</td>
			</tr>
			<th colspan="2">Reservas</th>
			<tr >

				<td colspan="2">
					<input type="image"  src="../../vista/img/reservas/carrito.jpg" class="imagen" id="imagen">
					</form>
					</td>
				</td>
			</tr>

				
		</table>
	

	
</body>
</html>
<?php 

 ?>