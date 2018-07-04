<?php
include("../../controlador/seguridad/inter/seguridad_admin.php");
include ("../../Controlador/base_de_datos.php");
?>
<script language="JavaScript">
		function elimina(elim)
		{
			if(confirm ("¿Desea eliminar el registro?"))
			{
				window.location.href='../../modelo/categorias/eliminar.php?elim_cat= ' +elim+ '';
				return true;
			}

		}
		function edit(cons)
		{
			window.location.href='../../modelo/categorias/editar.php?edit_cat= ' +cons+ '';
		}
	</script>
	<link rel="stylesheet" type="text/css" href="consultas.css">
	<style type="text/css">
	

	</style>
<body >
<table class="tabla" border="1">
<th>Numero de registro</th>
<th>Categoria</th>
<th>Editar</th>
<th>Eliminar</th>
<?php
class Consulta_categoria
{

	public function consultar()
	{
		$visible=1;
		$conecta= new conexion();
		$db= $conecta->conm();
		$consulta="SELECT * from categorias where estado='$visible'";
		$trae=mysqli_query($db,$consulta);

		 while ($campo = mysqli_fetch_array($trae))
		 { 
			 $id=$campo['id_cat'];
			 $nombre= $campo['categoria'];
?>
	
<tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $nombre; ?></td>

<td><input type="BUTTON"  onclick="edit(<?php echo $campo['id_cat']; ?>)" name="consulta" value="Editar" class="boton2"></td>
	<td><input type="BUTTON" onclick="elimina(<?php echo $campo['id_cat']; ?>)" name="Eliminar" value="Eliminar" class="boton3"></td>
</tr>

<?php 	 }
	}
}
$consultas= new Consulta_categoria();
$consultas->consultar();
?>
</table>
<form action="../menureg.php">
			<input type="submit" value="Menu registro y consulta" class="boton4">
		</form>
		<form action="consulta.php">
			<input type="submit" value="consultar registros"class="boton4">
<?php

 ?>
 