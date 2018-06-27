<?php
include '../../modelo/reportes/info_reporte.php';
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="Reporte.CSS">
		<style type="text/css">

		</style>
	</head>
	<body >
		
		<br>
		<table class="tabla">
			<thead>
				<th>Isbn</th>
				<th>Libro</th>
				<th>Fecha</th>
				<th>Editorial</th>
				<th>Categoria</th>
				<th>Autor</th>
				<th>Pais de autor</th>
				<th>Cantidad</th>
				<th>Compra</th>
			</thead>
			<tbody>
				<?php
					 $informacion= new info();
					 $trae= $informacion->traer();
					 while ($informe=$trae->fetch_array(MYSQLI_ASSOC))
					 {
					 	echo "<tr>";
					 	echo "<td>$informe[isbn]</td>";
					 	echo "<td>$informe[libro]</td>";
					 	echo "<td>$informe[fecha]</td>";
					 	echo "<td>$informe[editorial]</td>";
					 	echo "<td>$informe[categoria]</td>";
					 	echo "<td>$informe[autor]</td>";
					 	echo "<td>$informe[pais_de_autor]</td>";
					 	echo "<td>$informe[cantidad]</td>";
					 	echo "<td>$informe[compra]</td>";
					 	echo "</tr>";
					 }
				?>
			</tbody>
		</table>
		<form action="../../modelo/reportes/exportar_excel.php"class="reportes" >
			<input type="image"src="../imagenes/excel2013.png"class="img" tarjet="_blank">
		</form>
	</body>
</html>