<?php
	include("../../controlador/seguridad pags.php");
	require_once("../../controlador/tiempo_de_sesion.js");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();  
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
<link rel="stylesheet" href="consulta.css">

</head>
<body  text="#FFFFFF">

<?php
	class Consulta 
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

<?php }}}$ver=new Consulta(); $j=$ver->seleccion(); ?>

</table>

<br>
<form action="consulta.php" method="post" class="boton">
<input type="submit" value="consultar registros" class="input">
</form>
<form action = "formulario-ed.php" method="post"  class="boton">
<input type="submit" value="Ir a registro">
</form>
<form action = "../menureg.php" method="post"  class="boton">
<input type="submit" value="Volver a registro y consulta">
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

?>
		
		
		
		
		
		
		
		
		
	 
	