<?php
	include("../../controlador/seguridad/inter/seguridad_admin.php");
?>
<table width="500" border="1" class="table" >
	
				  <th>Codigo_postal</th>
				  <th>Nombre</th>
                  <th>Ubicacion</th>
				  <th>Telefono</th>
				  <th>Correo</th>
				  <th>Pbx</th>
				  <th>Jefe_editorial</th>
				  <th>Fecha_creacion</th>
				  <th>Editar</th>
				  <th>Eliminar</th>
				  
	
	
<head>
<!--link rel="stylesheet" href="consulta.css"-->
<style type="text/css">
body
{
	background-image:url(imagenes/consulta.jpg);
	background-size: 100% 100%;
	background-attachment:scroll;	
	font-style: italic;
}
.table 
{
	width: 80%;
	height: 30%;
	margin: 0% 8%;
	background: rgba(0,0,0,0.4);
	box-sizing: border-box;
	border-radius:7%;
	font-style: italic;
	color: #fff;
	text-align: center;
	font-size: 140%;
	position: float;
}

.input
{
	width: 80%;
	height: 50%;
	margin-left: 10%;
	
	box-sizing: border-box;
	font-size: 100%;
	font-style: italic;
}
.botoneliedi{
	font-size:90%;
	width: 100%;
	color:#FFF;
	border:solid ;  
	text-align:center; background:#575757; 
	padding:6% 3% 6% 3%;  
	-moz-border-radius: 2%;  
	-webkit-border-radius: 2%; 
	border-radius: 2%;
	
	border:dashed 1px #000000;
	-moz-border-radius-topleft: 5px; 
	-moz-border-radius-topright:1px; 
	-moz-border-radius-bottomleft:1px; 
	-moz-border-radius-bottomright:5px; 
	-webkit-border-top-left-radius:5px; 
	-webkit-border-top-right-radius:1px; 
	-webkit-border-bottom-left-radius:1px;
	-webkit-border-bottom-right-radius:5px;
	border-top-left-radius:5px; 
	border-top-right-radius:2px; 
	border-bottom-left-radius:1px;
	border-bottom-right-radius:5px;
}
.botoneliedi:hover
{
	cursor: pointer;
	background: #fff;
	color: #000000;
}
.boton
{

	position: absolute;
	background:rgba(0,0,0,0.4);
	color: #fff;
	white-space: pre-wrap;
	width: 50%;
	height: 10%;
	margin:0% 22%;
	min-height: 10%;
	-webkit-flex: 1 1 auto;
      flex: 1 1 auto;

	
}
.boton1
{
	position: absolute;
	min-height: 10%;
	-webkit-flex: 1 1 auto;
      flex: 1 1 auto;
	background:rgba(0,0,0,0.4);
	color: #fff;
	white-space: pre-wrap;
	width: 50% ;
	height: 10%;
	margin:6% 22%;
	display: flex;
	

}
.boton2
{
	position: absolute;
	min-height: 10%;
	-webkit-flex: 1 1 auto;
      flex: 1 1 auto;
	background:rgba(0,0,0,0.4);
	color: #fff;
	height: 10%;
	white-space: pre-wrap;
	width: 50% ;
	margin:12% 22%;
	display: flex;
}

.table2 
{
	width: 80%;

	height: 70%;
	margin: 20% 10%;
	background: rgba(0,0,0,0.4);
	box-sizing: border-box;
	border-radius:7%;
	font-style: italic;
	color: #fff;
	text-align: center;
	font-size: 140%;
	position: absolute;
}
input
{
	width: 90%;
	height: 80%;
	margin-left: 1%;
	box-sizing: border-box;
	font-size: 100%;
	font-style: italic;
}
.boton3
{
	position: absolute;
	background:rgba(0,0,0,0.4);
	color: #fff;
	white-space: pre-wrap;
	width: 51% ;
	height: 8%;
	margin:60% 22%;
	font-size: 200%;
	
}
.boton:hover
{
	cursor: pointer;
	background: #fff;
	color: #000000;
}
.boton1:hover
{
	cursor: pointer;
	background: #fff;
	color: #000000;
}


::-webkit-input-placeholder 
{
   text-align: center;
   font-size: 100%;
   white-space: pre-wrap;
}

:-moz-placeholder
 { /* Firefox 18- */
   text-align: center;
   font-size: 100%;  
   white-space: pre-wrap;
}

::-moz-placeholder
{  /* Firefox 19+ */
   text-align: center; 
   font-size: 100%;
   white-space: pre-wrap; 
}

:-ms-input-placeholder 
{  
   text-align: center; 
   font-size: 100%;
   white-space: pre-wrap;
}
</style>

</head>
<body>

<?php
include("../../controlador/base_de_datos.php");
	class Consulta_editorial 
	{
	public function seleccion()
	{	
		$i=0;
		$conectardb= new Conexion();
		$con=$conectardb->conm();
		
		$consulta="select * FROM editoriales ";
		$ejecutar=mysqli_query($con, $consulta);
		
		while ($fila=mysqli_fetch_array($ejecutar))
		{
			$codigo_postal=$fila['codigo_postal'];
			$nombre=$fila['nombre_e'];
			$ubicacion=$fila ['ubicacion'];
			$telefono=$fila['telefono'];
			$correo=$fila['correo'];
			$pbx=$fila['pbx'];
			$jefe_editorial=$fila['jefe_editorial'];
			$fecha_creacion=$fila['fecha_creacion'];
			$i++;
			
?>
	<script type="text/javascript">
				function elimi(delid){

					if (confirm ("¿Desea eliminar este registro?")){
			window.location.href ='../../modelo/editoriales/eliminar.php?elim_edit=' +delid+ '';
					return true;
			}
		}
	
</script>
<tr align= "center">
<td> <?php echo $codigo_postal; ?></td>
<td> <?php echo $nombre; ?></td>
<td><?php echo $ubicacion; ?></td>
<td><?php echo $telefono; ?></td>
<td><?php echo $correo; ?></td>
<td><?php echo $pbx; ?></td>
<td><?php echo $jefe_editorial; ?></td>
<td><?php echo $fecha_creacion; ?></td>

<td><input type="BUTTON" onclick="window.location.href='consulta.php?editar=<?php  echo $codigo_postal ?>'" name="Editar" value="Editar" class="botoneliedi"></td>
<td><input type="BUTTON" onclick="elimi(<?php echo$fila['codigo_postal']; ?>)" name="Eliminar" value="Eliminar" class="botoneliedi"></td>
</tr>

<?php }}}$ver=new Consulta_editorial(); $j=$ver->seleccion(); ?>

</table>

<br>
<form action="consulta.php" method="post" class="boton">
<input type="submit" value="consultar registros" class="input">
</form>
<form action = "formulario-ed.php" method="post"  class="boton1">
<input type="submit" value="Ir a registro" class="input">
</form>
<form action = "../menureg.php" method="post"  class="boton2">
<input type="submit" value="Volver a registro y consulta" class="input">
</form>



<?php

		if (isset($_GET['editar']))
		{
			include ("../../modelo/editoriales/editar.php");
		
		}
?>

<?php
		if (isset($_GET['eliminar']))
		{
			include ("../../modelo/editoriales/eliminar.php");
		}
		#include '../Reportes/filtros.php';

?>
		
		
		
		
		
		
		
		
		
	 
	