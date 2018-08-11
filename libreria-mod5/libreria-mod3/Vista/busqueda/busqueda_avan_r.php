<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	
	<style>
	*
{
	
	padding:0;
	margin:0;
	
}
body
{
	background-repeat: no-repeat;
	background-image: url('../../vista/img/reservas/buscar_libro.jpg');
	background-size: 100%;
	
	color: silver;
}
.tabla
{
	width:auto;
	height: auto;
	text-align:center;
	border-color:red;
	background:rgba(195,209,179,0.4);
	border-radius:20px;
	margin: 9% 35%;

}
.imagen
{

	  background-repeat:no-repeat;
	  background-size: auto;
  height:30px;
  width:30px;
  background-position:center;	
	border-radius:60%;
	color:  rgba(255, 255, 255, 0.1);

	
}
.imagen:hover
{
	border:1px inset;
	border-color:red;
}


	</style>
	
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
	
		
		
		<table border="1"  class="tabla" >
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
					<input type="text" name="cant"  placeholder="Cantidad" required="required">
				</td>
			</tr>
			<th colspan="2">Reservas</th>
			<tr >

				<td colspan="2">
					<input type="image"  src="../../vista/img/reservas/carrito.jpg" class="imagen" >
					</form>
					</td>
				</td>
			</tr>

				
		</table>
	

	
</body>
</html>
<?php 

 ?>