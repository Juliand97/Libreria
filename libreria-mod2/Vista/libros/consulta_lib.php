<?php
include("../../controlador/seguridad/seguridad_admin.php");
?>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo_con.css">	
		<link rel="stylesheet" type="text/css" href="../Reportes/filtros.css">	
	<script language = "JavaScript">
	 function elimi(delid)
	 {
		if (confirm ("¿Desea eliminar el registro?"))
		{
			window.location.href ='../../modelo/libros/eliminar_lib.php?elim_isbn=' +delid+ '';
	 		return true;
	 		}
	 	}
	</script>
</head>	
	<table width="1000" border="1" >
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
			
<?php
	include("../../controlador/base_de_datos.php");
	 class Consulta{

	 	public function seleccion(){

	 		$i=0;//contador
	 		//base de datos
	 		$inten= new Conexion();
	 		$con=$inten->conm();
	 		//sentencia sql
	 		$consulta="SELECT * FROM `libros`";
	 		//Ejecucion de la consulta
	 		$ejecutar=mysqli_query($con,$consulta);
	 		//llamado de los datos en una tabla
	 		while($fila= mysqli_fetch_array($ejecutar)){
	 			//datos de la tabla
	 			$Isbn=$fila['isbn'];
	 			$Libro=$fila['libro'];
	 			$Fecha=$fila['fecha'];
	 			$Editorial=$fila['editorial'];
	 			$Categoria=$fila['categoria'];
	 			$Autor=$fila['autor'];
	 			$Pais_Autor=$fila['pais_de_autor'];
	 			$di=$fila['compra'];
	 			$i++;

?>

	 		<tr align="center">
	 			<td><?php echo $Isbn; ?></td>
	 			<td><?php echo $Libro; ?></td>
	 			<td><?php echo $Fecha; ?></td>
	 			<td><?php echo $Editorial; ?></td>
	 			<td><?php echo $Categoria; ?></td>
	 			<td><?php echo $Autor; ?></td>
	 			<td><?php echo $Pais_Autor; ?></td>
	 			<td><?php echo $di; ?></td>

	 			<td><input type="BUTTON" onclick="window.location.href='consulta_lib.php?editar=<?php  echo $Isbn ?>'" name="Editar" value="Editar" class="boton1"></td>
	 			<td><input type = "BUTTON" onclick = "elimi(<?php echo $fila['isbn']; ?>)" name = "Eliminar" value = "Eliminar" class="boton1"></td>
	 		</tr>
	 		<?php
	 		}
	 	}
	 }
	 $ver=new Consulta(); 
	 $j=$ver->seleccion();//llamado a la clase y al metodo
	 		?>
	 	</table>
	 	<table >
	 		<!--botones de consulta, registro y ,menú--> 
	 		<form action="consulta_lib.php" method="POST" >
	 			<input type="submit" value="Consultar registros" class="boton2">	 		
	 		</form>&nbsp&nbsp&nbsp
	 		<form action="Formulario_reg_lib.php" method="POST" >
	 			<input type="submit" value="Ir a registro" class="boton2">
	 		</form>&nbsp&nbsp&nbsp
	 		<form action="../menureg.php" method="POST">
				<input type="submit" value="Volver a registro y consulta" class="boton2">
			</form>
				<form action="cantidad.php">
		<input type="submit" name="add" value="Agregar Cant." class="boton2" >
	</form>	
		<form action="consulta_cant.php">
		<input type="submit" name="add" value="existencias." class="boton2" >
	</form>		&nbsp&nbsp&nbsp
	 </table>

	<?php
		if (isset($_GET['editar'])){
			include("../../modelo/libros/editar_lib.php");
		}	
	?>
	<?php
		if (isset($_GET['eliminar'])){
			include("../../modelo/libros/eliminar_lib.php");
		}
include '../Reportes/filtros.php';
	?>
