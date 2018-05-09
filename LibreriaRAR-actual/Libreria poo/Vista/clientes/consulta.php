<?php
	include("../../controlador/seguridad pags.php");
	require_once("../../controlador/tiempo_de_sesion.js");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();  
?>
<table width="500" border="1" >

	
		<th>Identificacion</th>
		<th>Nombre</th>
		<th>Correo electronico</th>
		<!--th>Contraseñas</th-->
		<!--<th>Privilegios</th>-->
		<th>Editar</th>	
		<th>Eliminar</th><br>	
<?php
	Class Consulta
	{
		public function seleccion()
		{
			$i=0;
			$inten= new Conexion();
			$con=$inten->conm();
			$consulta="SELECT * FROM `usuarios`  ";
			$ejecutar=mysqli_query($con,$consulta);
			while($fila= mysqli_fetch_array($ejecutar))
			{
			$identificacion = $fila['identificacion'];
			$nombre = $fila['nombre'];
			$correo = $fila['correo'];
			$i++;
?> 
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilo_cons.css">		
<script language = "JavaScript">
function elim(elimina)
	{

	 	if (confirm ("¿Desea eliminar el usuario?"))
		{
	 	window.location.href ='../../modelo/clientes/eliminar.php?elim_usu=' +elimina+ '';
	 	return true;
	 	}
	}
</script>
</head>	
<tr align= "center">
<td><?php echo $identificacion; ?></td>
<td><?php echo $nombre; ?></td>
<td><?php echo $correo; ?></td>
<td><input type="BUTTON" onclick="window.location.href='consulta.php?editar=<?php  echo $identificacion ?>'" name="Editar" value="Editar" class="boton1"></td>
<td><input type = "BUTTON" onclick = "elim(<?php echo $fila['identificacion']; ?>)" name = "Eliminar" value = "Eliminar" class="boton1"></td>
</tr>
			<?php }}}$ver=new Consulta(); $j=$ver->seleccion(); ?>
</table>
<br>
<table border=0>
<form action="consulta.php" method="post">
<input type="submit" value="consultar registros" class="boton1">
</form>
<form action = "formulario.php" method="post" >
<input type="submit" value="Ir a registro"class="boton1">
</form>
<form action = "../menureg.php" method="post">
<input type="submit" value="Volver a registro y consulta" class="boton1">
</form>
</table>

<?php
	
	if (isset($_GET['editar']))
	{
		include ("../../modelo/clientes/editar.php");
	}
	if (isset($_GET['eliminar']))
	{
		include ("../../modelo/clientes/eliminar.php");
	}
?>