<?php
include ("../../controlador/Base_de_datos.php"); 
	//$libro=$_POST['libro'];

	
?>
<html>
	<head>
	<style>
*
{
	padding:0;
	margin:0;
	background-image:url(../../vista/imagenes/buscar_libro.jpg);
	
	
}
.tabla
{
	width:auto;
	height: auto;
	text-align:center;
	border-color:red;
	background:rgba(195,209,179,0.4);
	border-radius:20px;
	margin:auto;
	margin-top:10px;
}
.imagen
{
	width:auto;
	height:30px;
	border:10px ;
	margin-left:10px;
	border-radius:60%;
	
}
.imagen:hover
{
	border:1px inset;
	border-color:red;
}

	</style>
	</head>
	<body >
		<table  border="1" class="tabla" >
		<th>Nombre del libro</th>
		<th>Cod isbn</th>
		<th>Nombre del autor</th>
		<th>Fecha</th>
		<th>Editorial</th>
		<th>Categoria</th>
		<th>Pais del autor</th>
		
<?php
	Class Consulta_libro
	{

		public function seleccion()
		{
			$libro=$_POST['libro'];
			$autor=$_POST['autor'];
			
			$i=0;
			$inten= new Conexion();
			$con=$inten->conm();
			
			$consulta="SELECT * FROM libros where libro='$libro' and autor='$autor'";
			
			$ejecutar=mysqli_query($con,$consulta);
			//$fila= mysqli_fetch_array($ejecutar);
			
				$fila = mysqli_fetch_array($ejecutar);
				$nombre_libro= $fila['libro'];
				//echo $consulta;
				$cod_isbn=$fila['isbn'];
				$nombre_autor=$fila['autor'];
				$fecha=$fila['fecha'];
				$editorial=$fila['editorial'];
				$categoria=$fila['categoria'];
				$pais=$fila['pais_de_autor'];	
				$i++;
				
			if($libro!=$nombre_libro)
		{
			//include("busqueda avanzada.js");
			echo "no";
		}
			else
			{
		echo "Informacion"/*"<script> alert('Informacion Relacionada')</script>"*/;
	?>
			<tr>
				<td><?php echo $nombre_libro; ?> </td>
				<td><?php echo $cod_isbn; ?> </td>
				<td><?php echo $nombre_autor; ?> </td>
				<td><?php echo $fecha; ?> </td>
				<td><?php echo $editorial; ?> </td>
				<td><?php echo $categoria; ?> </td>
				<td><?php echo $pais; ?> </td>
			</tr>
		</table>
	</body>
</html>
<?php 
			}
		}
	}		
	$busqueda=new Consulta_libro();
	$libro=$busqueda->seleccion();


	?>