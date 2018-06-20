<?php
		include("../../controlador/seguridad/inter/seguridad_admin.php");
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
include("../../controlador/base_de_datos.php");
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
	<link rel="stylesheet" type="text/css" href="../Reportes/filtros.css">
	<style type="text/css">
label
{
	width: 10%;
	height: 10%;
	color: white;
	margin-left: 10%;
}
.reporte
{
	margin-top:2%;
	width: 25%;
	height: 10%;
	background-color: rgba(0, 44, 44, 0.6);
}
#lista
{
	margin-left: 10%;
	width: 26%;
	height: 30%;
	background-color: rgba(24, 72, 48, 0.8);
	color:#fff;
}

.envio
{	
	margin-top: -10%;
	margin-left: 40%;
	
	border-radius: 100%;
	border: 2%;
	border-style: outset;
}
.envio:hover
{
	animation:  mover 1s 1;
}
@keyframes mover 
{
	0%{
		transform: translateX(0%);
		}
	10%{
		transform: translateX(20%); 
	}
	20%{
		transform: translateX(0%);
		}
	30%{
		transform: translateX(20%);
		 }
	40%{
		transform: translateX(0%);
		 }
	50%{
		transform: translateX(20%); 
	}
	60%{
		transform: translateX(0%);
		}
	70%{
		transform: translateX(20%);
		}
	80%{
		transform: translateX(0%);
		}
	90%{
		transform: translateX(20%);
		}
	100%{
		transform: translateX(0%);
		}
}
	</style>	
	<script language="JavaScript">
		function elimina(elim)
		{
			if(confirm ("¿Desea eliminar el registro?"))
			{
				window.location.href='../../modelo/autores/eliminar.php?elim_aut= ' +elim+ '';
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

	include '../Reportes/filtros.php';
?>
