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
	<meta charset="UTF-8">
	<title>Actualización de libros</title>
	<link rel="stylesheet" type="text/css" href="consulta1.css">
</head>
<body  text="#FFFFFF">
<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="libreria";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from libros";
$query=$conexion->query($sql);
 
// $conexion = mysql_connect("localhost","root","");
//mysql_select_db("usuario",$conexion);
// $sql= mysql_query("select * from users");

//while($res=mysql_fetch_array($sql)){
	
//echo'<tr>
//		<td>'.$res['isbn'].'</td>
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
				  <th>ISBN</th>
                  <th>Libro</th>
                  <th>Fecha</th>
				  <th>Editorial</th>
				  <th>Categoria</th>
				  <th>Autor</th>
				  <th>País de autor</th>
              
                  </tr>
            </header>";
		
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['isbn'].'</td>
		<td>'.$res['libro'].'</td>
		<td>'.$res['fecha'].'</td>
		<td>'.$res['editorial'].'</td>
		<td>'.$res['categoria'].'</td>
		<td>'.$res['autor'].'</td>
		<td>'.$res['pais_de_autor'].'</td>
		
	</tr>
	';
		}
		$tbHtml.= "</table>";
		echo "<table border='0px' width='100'>";
		echo "<td><form action='../menureg.php'>
<input type='submit' value='Volver a Registros y consultas' class='boton'>
</form>
</td>
<td><form action='actualizarlibro.php'>
<input type='submit'  value='Actualizar' class='boton' >
</form>
</td>
<td><form action='borrarlibro.php'>
<input type='submit' value='Borrar libro'class='boton'>
</form></td>";
		$tbHtml.= "</table>";
	
	}
	
	else
	{
	echo "No hay resultados";
	}
	
	//cambiar los datos por productos
	
?>
</body>

