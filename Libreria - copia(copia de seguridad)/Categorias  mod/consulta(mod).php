<?php
$con = mysqli_connect("localhost","root","" ,"libreria") or die ("Error");
?>
<body background="imagenes/consulta.jpg">
<table width="500" border="1" style="background-color: silver;">
<th>Numero de registro</th>
<th>Categoria</th>
<th>Subcategoria</th>
<th>Subcategoria 1</th>
<th>Editar</th>
<th>Eliminar</th>
<?php
 $ver= "SELECT * FROM `categorias`"; 
 $mostrar= mysqli_query($con,$ver);

 while ($campo = mysqli_fetch_array($mostrar))
 {
	 $nreg= $campo['idcategoria'];
	 $nombre= $campo['nombrecategoria'];
	 $nsub1= $campo['subncategoria1'];
	 $nsub2= $campo['subncategoria2'];
?>
<tr>
<td><?php echo $nreg; ?></td>
<td><?php echo $nombre; ?></td>
<td><?php echo $nsub1; ?></td>
<td><?php echo $nsub2; ?></td>
<td><a href="consulta(mod).php?editar=<?php echo $nreg; ?>">Editar</a></td>
<td><a href="consulta(mod).php?eliminar=<?php echo $nreg; ?>">Eliminar</a></td>
</tr>
<?php } ?>
</table>
<?php
if (isset($_GET['editar'])){
include("editar(mod).php");}
 ?>
 <?php
 if (isset($_GET['eliminar'])){
include("eliminar(mod).php");}
 ?>