<body background="imagenes/consulta.jpg" text="#FFFFFF">
<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="libreria";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from autores order by no_registro ASC";
$query=$conexion->query($sql);
 
// $conexion = mysql_connect("localhost","root","");
//mysql_select_db("usuario",$conexion);
// $sql= mysql_query("select * from users");

//while($res=mysql_fetch_array($sql)){
	
//echo'<tr>
//		<td>'.$res['id'].'</td>
//		<td>'.$res['nombre'].'</td>
//		<td>'.$res['password'].'</td>
//	</tr>
//	';
//	}
	
	
			
	$tbHtml="";
	
	if($query->num_rows>0){
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>No.</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
				  <th>Naciolidad</th>
				  <th>Fecha de nacimiento</th>
				  <th>Estado</th>
				  <th>Numero de obras</th>
              
                  </tr>
            </header>";
		
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['no_registro'].'</td>
		<td>'.$res['nombrea'].'</td>
		<td>'.$res['apellidoa'].'</td>
		<td>'.$res['nac'].'</td>
		<td>'.$res['fechan'].'</td>
		<td>'.$res['estadoa'].'</td>
		<td>'.$res['obras'].'</td>
		
	</tr>
	';
		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>

<table>
<br>
<tr><td>
<form name="form2" method="post" action="3actualizar.html">
<input type="submit" name="actualizar" id="actualizar" value="Actualizar"> 
</form></td>
<td>
<form name="form2" method="post" action="borrar.html">
<input type="submit" name="borrar" id="borrar" value="Borrar"> 
</form></td>
<td><form action= "../menureg.html">
<input type="submit" value="Volver a Registros y consultas">
</form></td></tr>
</table>
 </body>
