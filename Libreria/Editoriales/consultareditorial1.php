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
		echo "<td><form action='../menureg.html' method='post'><input type='submit' value='Menu registro y consultas'></form></td>
		<td><form action='actualizareditorial.php' method='post'><input type='submit' value='Actualiazar editorial'></form></td>;
		<td><form action='borrar.html' method='post'><input type='submit' value='Borrar editorial'></form></td>";
		$tbHtml.= "</table>";
		
	
	}
	
	else
	{
	echo "No hay resultados";
	}
	
	//cambiar los datos por productos
?>

</body>


