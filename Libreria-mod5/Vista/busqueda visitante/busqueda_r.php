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
	background-image: url('../../vista/img/reservas/buscar_libro.jpg');
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
	width: 10%;
	height: 10%;
	margin: -29% auto;
}
.regreso
{
	width: 100%;
	height: 100%;
	border-radius: 100%;
}


	</style>
	</style>
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
			
			

			<tr>
				<td>
					<input type="text" name="lib" value="<?php echo $buscar['libro']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="isb" value="<?php echo $buscar['isbn']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="aut" value="<?php echo $buscar['autor']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="fec" value="<?php echo $buscar['fecha']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="edi" value="<?php echo $buscar['editorial']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="cat" value="<?php echo $buscar['categoria']; ?>"  class="inputs" readonly="readonly">
				</td>

				<td>
					<input type="text" name="pai" value="<?php echo $buscar['pais_de_autor']; ?>"  class="inputs" readonly="readonly">
				</td>
		</table>
	</form>
	<form action="../../vista/pag_cliente.php" class="form2">
			<input type="submit" value="inicio" class="regreso">
		</form>
</body>
</html>