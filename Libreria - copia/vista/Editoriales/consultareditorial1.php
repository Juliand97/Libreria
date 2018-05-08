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
<head>
<link rel="stylesheet" href="consulta.css">
</head>
<body background="imagenes/consulta.jpg" text="#FFFFFF">
<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="libreria";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from editoriales";
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
                  <th>Codigo_postal</th>
                  <th>Ubicacion</th>
				  <th>Telefono</th>
				  <th>Correo</th>
				  <th>Pbx</th>
				  <th>Jefe_editorial</th>
				  <th>Fecha_creacion</th>
              
                  </tr>
            </header>";
		
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['codigo_postal'].'</td>
		<td>'.$res['ubicacion'].'</td>
		<td>'.$res['telefono'].'</td>
		<td>'.$res['correo'].'</td>
		<td>'.$res['pbx'].'</td>
		<td>'.$res['jefe_editorial'].'</td>
		<td>'.$res['fecha_creacion'].'</td>
		
	</tr>
	';
		}

		$tbHtml.= "</table>";
		echo "<table border='0'>
		<td>
		<form action='../menureg.php' method='post'>
		<input type='submit' value='Menu registro y consultas' class='boton1'>
		</form>
		</td>
		<td>
		<form action='actualizareditorial.php' method='post'>
		<input type='submit' value='Actualiazar editorial' class='boton1'>
		</form>
		</td>;
		<td>
		<form action='borrar-index.php' method='post'>
		<input type='submit' value='Borrar editorial' class='boton1'>
		</form>
		</td>
		</table>";
	
	}
	
	else
	{
	echo "No hay resultados";
	}
	
	//cambiar los datos por productos
?>

</body>


