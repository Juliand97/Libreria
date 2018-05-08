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
<body background="imagenes/actualizar.jpg" text="#FFFFFF">
<form name="form1" method="post" action="2actualizar.php" tipo="registrar">
  <p>Formulario de Actualizaci&oacute;n  </p>
  <table width="200" border="2">
    <tr>
      <td>No.registro<td>
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
      <td><label for="obras">Obras:</label></td> 
      <td><input type="text" name="obras" id="obras" value="<?php echo $res['obras'];}}  ?>"</td>
    </tr>
    <tr>
	
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="Guardar" id="Guardar" value="Actualizar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <label for="Nombre"></label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
                     
                      
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>

