<?php
include ("../../controlador/Base_de_datos.php"); 
include("../../controlador/seguridad/seguridad_cliente.php");	
?>
<html>
	<head>
	<!--<link rel="stylesheet" href="buscar-li.css">-->
	<style>

{
	padding:0;
	margin:0;

	
	
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
	</head>
	<body text="#000000" background="../../vista/imagenes/buscar_libro.jpg">
		<table width="900" border="1" class="tabla" >
		<th>Nombre del libro</th>
		<th>Cod isbn</th>
		<th>Nombre del autor</th>
		<th>Fecha</th>
		<th>Editorial</th>
		<th>Categoria</th>
		<th>Pais del autor</th>
		<th>Cantidad</th>
		<th>Reservar</th>
<?php
#session_start();
Class Consulta_libro
	{
		

		public function seleccion()
		{
			$libro=$_POST["libro"];
			#echo "aqui debe estar el libro".$libro."<br>";
			$i=0;
			$inten= new Conexion();
			$con=$inten->conm();
			
			$consulta="SELECT * FROM libros where libro like'%$libro'";
			//echo $consulta;
			$ejecutar=mysqli_query($con,$consulta);
			
			
				$fila = mysqli_fetch_array($ejecutar);
				$nombre_libro= $fila['libro'];
				//echo $nombre_libro;
				$cod_isbn=$fila['isbn'];
				$_SESSION['libro_i']=$cod_isbn;
				$nombre_autor=$fila['autor'];
				$fecha=$fila['fecha'];
				$editorial=$fila['editorial'];
				$categoria=$fila['categoria'];
				$pais=$fila['pais_de_autor'];	
				$i++;
				
				if(isset($nombre_libro))
				{
								
	?>
			<tr>
				<td><?php echo $nombre_libro; ?> </td>
				<td><?php echo $cod_isbn; ?> </td>
				<td><?php echo $nombre_autor; ?> </td>
				<td><?php echo $fecha; ?> </td>
				<td><?php echo $editorial; ?> </td>
				<td><?php echo $categoria; ?> </td>
				<td><?php echo $pais; ?> </td>
				<td>
					<form action="reservas.php"  method="post">
						<input type="text" name="cant" id="cant" placeholder="Cant" >
						<td><input type="image" src="../../vista/imagenes/carrito.jpg" class="imagen" /> </td>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html>
	<?php 
						
				}	
				else
				{	echo "Informacion","<script> alert('Informacion no  existente')</script>";
					include("busqueda avanzada.js");
				}
			
			}
			
		}	
	$busqueda=new Consulta_libro();
	$libro=$busqueda->seleccion();
	?>