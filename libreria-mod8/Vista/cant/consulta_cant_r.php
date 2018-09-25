<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

<link rel="stylesheet" type="text/css" href="../../Vista/css/cant/cons_cant.css">
</head>
<body>
	<table style="color: white">
		<th>ISBN</th>
	 	<th>Libro</th>
	 	<th>Cantidad entrante</th>
	 	<th>Prestados</th>
	 	<th>Devueltos</th>
	 	<th>Existencia</th>
		<tr>
			<?php 
				$cant=$consulta['entrantes'];
				$salida=$consulta['prestados'];
				$devuelto=$consulta['devolucion'];
				$existencia=$salida-$devuelto;
		 		$total=$cant-$existencia;
			 ?>
			<td><?php echo $consulta['isbn']; ?></td>
			<td><?php echo $consulta['libro']; ?></td>
			<td><?php echo $consulta['entrantes']; ?></td>
			<td>
				<?php
					 if($existencia<=0) 
					 {
					 	echo "0";
					 }
					 else
					 {
					 	echo $existencia;
					 }
				?>
			</td>
			<td><?php echo $consulta['devolucion']; ?></td>
			<td><?php echo $total; ?></td>
		</tr>
	</table>
</body>
</html>