<?php
	include("../../controlador/seguridad pags.php");
	require_once("../../controlador/tiempo_de_sesion.js");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();
?>
<table width="500" border="1" >
		<th>No. de registro</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Nacionalidad</th>
		<th>Fecha de Nacimiento</th>
		<th>Estado</th>
		<th>No.Obras</th>
		<th>Editar</th>	
		<th>Eliminar</th><br>	
<?php
	Class Consulta
	{
		public function seleccion()
		{
			$i=0;//contador
			//base de datos
			$inten= new Conexion();
			$con=$inten->conm();
			//sentencia sql
			$consulta="SELECT * FROM `autores`  ";
			//ejecucion de la consulta
			$ejecutar=mysqli_query($con,$consulta);
			//llamado de los datos en una tabla
			while($fila= mysqli_fetch_array($ejecutar))
			{
				//datos de  la tabla
			$id = $fila['no_registro'];
			$nombre = $fila['nombrea'];
			$apellido = $fila['apellidoa'];
			$nac = $fila['nac'];
			$fechan = $fila['fechan'];
			$estadoa = $fila['estadoa'];
			$obras = $fila['obras'];
			$i++;	
?> 
<head>
	<link rel="stylesheet" type="text/css" href="estilo_consul.css">		
	<script language="JavaScript">
		function elimina(elim)
		{
			if(confirm ("¿Desea eliminar el registro?"))
			{
				window.location.href='../../modelo/autores/eliminar.php?elim_aut= ' +elim+ '';
				alert('Dentro de la funcion');
				return true;
			}
		}
	</script>
</head>	
	<tr align= "center">
	<td><?php echo $id; ?></td>
	<td><?php echo $nombre; ?></td>
	<td><?php echo $apellido; ?></td>
	<td><?php echo $nac; ?></td>
	<td><?php echo $fechan; ?></td>
	<td><?php echo $estadoa; ?></td>
	<td><?php echo $obras; ?></td>
	<td><input type="BUTTON" onclick="window.location.href='consulta.php?editar=<?php  echo $id ?>'" name="Editar" value="Editar" class="boton2"></td>
	<td><input type="BUTTON" onclick="elimina(<?php echo $fila['no_registro']; ?>)" name="Eliminar" value="Eliminar" class="boton2"></td>
	</tr>
			<?php }}}$ver=new Consulta(); $j=$ver->seleccion();//llamado a la clase y al metodo ?>
</table>
<br>
<table border=0 class="tabla">
	<tr>
	<form action="consulta.php" method="post">
		<input type="submit" value="consultar registros" class="boton2">
	</form>
	</tr>
	<tr>
	<form action = "formulario.php" method="post">
		<input type="submit" value="Ir a registro" class="boton2">
	</form>
	</tr>
	<tr>
	<form action = "../menureg.php" method="post">
		<input type="submit" value="Volver a registro y consulta" class="boton2">
	</form>
	</tr>
</table>

<?php
	
	if (isset($_GET['editar']))
	{
		include ("../../modelo/autores/editar.php");
	}
	if (isset($_GET['eliminar']))
	{
		include ("../../modelo/autores/editar.php");
	}
?>