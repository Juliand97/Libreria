<?php
include ("../controlador/Base_de_datos.php"); 
	$libro=$_POST['libro'];
?>
<html>
	<head>
	<link rel="stylesheet" href="../vista/busqueda.css">	
	</head>
	<body text="#FFFFFF">
		<table width="900" border="1" >
		<th>Nombre del libro</th>
		<th>Cod isbn</th>
		<th>Nombre del autor</th>
		<th>Fecha</th>
		<th>Editorial</th>
		<th>Categoria</th>
		<th>Pais del autor</th>
<?php
	$consulta="SELECT * FROM libros where libro='$libro'";
	$ejecutar=mysqli_query($con,$consulta);	
	$i=0;	
	
		
		$fila = mysqli_fetch_array($ejecutar);
		
			$nombre_libro=$fila['libro'];
			$cod_isbn=$fila['isbn'];
			$nombre_autor=$fila['autor'];
			$fecha=$fila['fecha'];
			$editorial=$fila['editorial'];
			$categoria=$fila['categoria'];
			$pais=$fila['pais_de_autor'];	
			$i++;
			if($libro!=$nombre_libro)
		{
			echo  "<Script>
			alert('Lo sentimos no hemos encontrado el libro. Intentalo nuevamente')
			window.location.replace('../vista/pag_cliente.php');
			</Script>";
		}
			else
			{
		echo "Informacion","<script> alert('Informacion Relacionada')</script>";
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
<?php }	?>