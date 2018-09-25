<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<style>
		<style>
*
{
	padding:0;
	margin:0;
}
body
{
	background-image: url('../../Vista/img/reservas/buscar_libro.jpg');
	background-size: 100%;
}
.formulario
{
	height: 100%;
}
.tabla
{
	width:100%;
	height: 50%;
	text-align:center;
	border-color:red;
	background:rgba(195,209,179,0.4);
	border-radius:20px;
	margin:auto;
}
.carrito
{

	background-repeat:no-repeat;
	background-size: auto;
  	height:30px;
  	width:30px;
  	background-position:center;	
	border-radius:60%;
	color:  rgba(255, 255, 255, 0.1);

	
}
.carrito:hover
{
	border:1px inset;
	border-color:red;
}

.formulario
{
	width: auto;
	height: auto;
	margin: 10% auto;
}
.inputs
{
	width: 100%;
	height: auto;
	white-space: pre-wrap;
	border-radius:29%; 
}
.form2
{
	width: 20%;
	height: 30%;
	margin: 9% auto;
	border-radius: 0%;	
}
.regreso
{
	width: 100%;
	height: 100%;
	border-radius: 100%;
}


	</style>
	<script src="../../Vista/js/validacion datos/autor/validar_autor.js"></script>	
	</head>
<body>
	<form action="" method="post" class="formulario">
		
		<table border="1"  class="tabla">
			<th>Nombre del libro</th>
			<th>Cod isbn</th>
			<th>Nombre del autor</th>
			<th>Fecha</th>
			<th>Editorial</th>
			<th>Categoria</th>
			<th>Pais del autor</th>
			
	<?php 
		foreach ($buscar as $registro) {
		# code...
	

	 ?>

			<tr>
				<td>
					<input type="text" name="lib" value="<?php echo $registro['libro']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="isb" value="<?php echo $registro['isbn']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="aut" value="<?php echo $registro['autor']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="fec" value="<?php echo $registro['fecha']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="edi" value="<?php echo $registro['editorial']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="cat" value="<?php echo $registro['categoria']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="pai" value="<?php echo $registro['pais_de_autor']; ?>"  class="inputs" readonly="readonly">
				</td>
			<?php } ?>
		</table>
	</form>
	<form action="../../vista/pag_cliente.php" class="form2">
			<input type="submit" value="inicio" class="regreso">
		</form>
</body>
</html>