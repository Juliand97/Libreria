<?php
	include("../../controlador/seguridad pags.php");
	if(is_null($usuario) )
	{	
		
		echo "<Script>
		alert('Lo sentimos debe iniciar sesion para poder continuar') 
		window.location.replace('../login-index.php')
		</script>";
		
	}
	else
	{	
	}
 ?>
<head><link rel="stylesheet" href="consulta.css"></head>
<body  text="#FFFFFF">
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
		
	        echo "<table border='1px' align='center'>
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

<table align="center">
<tr><td>
<form name="form2" method="post" action="3actualizar.php">
<input type="submit" name="actualizar" id="actualizar" value="Actualizar" class="boton1"> 
</form></td>
<td>
<form name="form2" method="post" action="borrar-index.php">
<input type="submit" name="borrar" id="borrar" value="Borrar" class="boton2"> 
</form></td>
<td><form action= "../menureg.php">
<input type="submit" value="Volver a Registros y consultas" class="boton3">
</form></td></tr>
</table>
 </body>
