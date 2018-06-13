<html>
<head>
	<style type="text/css">
		body
		{
			background-color: darkgray;
		}
		.cont
		{
			background-color: green;
			width: 30%;
			height: 30%;
			margin: 10% 30%;
		}
		.tabla
		{
			width: auto;
			height:30%;
			margin: 20% 16%;
			border-style: solid;
			border-width: 10%;
			border-color: gray;

		}
		th
		{
			border-style: solid;
			border-color: gray;
			border-style: outset;
		}
		tr
		{
			border-style: solid;
			border-color: gray;
			border-style: outset;
		}
		td
		{
			border-style: solid;
			border-color: gray;
			border-style: outset;
		}


	</style>
</head>

<body>
	<div class="cont">
	<table  class="tabla">
	 		<th>ISBN</th>
	 		<th>Libro</th>
	 		<th>Cantidad entrante</th>
	 		<th>Prestados</th>
	 		<th>Existencia</th>
	 		

<?php 
include("../../controlador/seguridad/seguridad_admin.php");
	include("../../controlador/base_de_datos.php");	

	if (isset($_POST['consulta']))
	 {
	 
	 	$isbn=$_POST['isbn'];
	 	$ver= new ver_cant($isbn);
		$cantidad= $ver->consulta();

	 } 
class ver_cant
{
	public $dato;
	public function __construct($dato)
	{
		$this->dato=$dato;
	}
	public function consulta()
	{
		$inten = new Conexion();/*Llamado a la clase conexion*/
		$con=$inten->conm();
		$consulta= "SELECT isbn,isbn_c,libro,sum(cant_ingresada) as entrantes,sum(cant_reservada) as prestados,sum(cant_ingresada)-sum(cant_reservada) as existencia from historial inner join libros WHERE isbn='$this->dato' and isbn_c=isbn";
		$envio=mysqli_query($con,$consulta);
		
		$info=mysqli_fetch_array($envio);
		 $isbn=$info['isbn'];
		 $libro=$info['libro'];
		 $cant=$info['entrantes'];
		 $salida=$info['prestados'];
		 $total=$info['existencia'];

		
 ?>
	 		<tr>
		 		<td><?php echo $isbn; ?></td>
		 		<td><?php echo $libro; ?></td>
		 		<td><?php echo $cant; ?></td>
		 		<td><?php echo $salida; ?></td>
		 		<td><?php echo $total; ?></td>
		 	
		 	
	
	 		</tr>
	 		<?php
	 		 

	 	}
} 
?>
	 	</table>
	 </div>
	 	<form action="../../Vista/libros/consulta_lib.php" class="form">
	 		<input type="submit" value="Volver a consulta de libros"  class="volver">
	 	</form>
	 </body>
 </html>
