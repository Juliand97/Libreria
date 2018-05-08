<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$a=$_POST["no_registro"];
$hostname_db = "localhost";
$database_db = "libreria";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from autores where no_registro='$a'";
$query=$z->query($sql);

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
	if($query->num_rows>0)
	{
		while($res=$query->fetch_array())
		{
			 
?>
<?php
	include("seguridad pags.php");
	if(is_null($usuario) )
	{	
		
		echo "<Script>
		alert('Lo sentimos debe iniciar sesion para poder continuar') 
		window.location.replace('../vista/login-index.php')
		</script>";
		
	}
	else
	{
		echo "das";
		
	}
 ?>
<head>
<link rel="stylesheet" href="actualizart.css">
<meta charset="UTF -8">
</head>
<body text="#FFFFFF"> <!--background="imagenes/actualizar.jpg"--> 
<form name="form1" method="post" action="../modelo/Autores/2actualizar.php" tipo="registrar">
  <p align="center">Formulario de Actualizaci&oacute;n  </p>
  <table width="200" border="2" align="center">
    <tr>
      <td>No.registro</td>
      <td><input type="text" name="no_registro" nombre="id" value="<?php echo $res['no_registro'];?>"></td>
    </tr>
    <tr>
      <td>Nombre: </td>
      <td><input type="text" name="nombrea" id="nombrea" value="<?php echo $res['nombrea'];?>"></td>
    </tr>
    <tr>
      <td><label for="direccion2">Apellido: </label></td>
      <td><input type="text" name="apellidoa" id="apellidoa" value="<?php echo $res['apellidoa'];  ?>" ></td>
    </tr>
    <tr>
      <td><label for="telefono2">Nacionalidad: </label></td>
      <td><input type="text" name="nac" id="nac" value="<?php echo $res['nac'];  ?>" ></td>
    </tr>
    <tr>
      <td><label for="fechan">Fecha De Nacimiento: </label></td>
      <td><input type="date" name="fechan" id="fechan" value="<?php echo $res['fechan'];  ?>" ></td>
    </tr>
    <tr>
      <td><label for="estadoa">Estado: </label></td> 
      <td><input type="text" name="estadoa" id="estadoa" value="<?php echo $res['estadoa'];  ?>" ></td>
    </tr>
 <tr>
      <td><label for="obras"> Num. de Obras:</label></td> 
      <td><input type="text" name="obras" id="obras" value="<?php echo $res['obras'];}}  ?>"</td>
    </tr>
  </table>
      <input type="submit" name="Guardar" id="Guardar" value="Actualizar" class="boton">
</form>
</body>