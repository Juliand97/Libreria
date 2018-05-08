<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["codigo_postal"];

$hostname_db = "localhost";
$database_db = "libreria";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from editoriales where codigo_postal='$zz'";
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
<head>
<link rel="stylesheet" href="actualizar.css">
</head>
<body background="imagenes/actualizar2.jpg" text="#FFFFFF">
<form name="form1" method="post" action="../../controlador/actualizareditorial2.php?tipo=registrar">
  <p>Formulario de Actualizacion </p>
  <table width="200" border="1">
    
	<tr>
      <td>codigo_postal: </td>
      <td><input type="text" name="codigo_postal" id="codigo_postal" value="<?php echo $res['codigo_postal'];?>"></td>
    </tr>
    <tr>
      <td>ubicacion: </td>
      <td><input type="text" name="ubicacion" id="ubicacion" value="<?php echo $res['ubicacion'];?>"></td>
    </tr>
    <tr>
      <td><label for="telefono">telefono: </label></td>
      <td><input type="text" name="telefono" id="telefono" value="<?php echo $res['telefono'];  ?>"></td>
    </tr>
	<tr>
      <td><label for="correo">correo: </label></td>
      <td><input type="email" name="correo" id="correo" value="<?php echo $res['correo'];  ?>"></td>
    </tr>
	<tr>
      <td><label for="pbx">pbx: </label></td>
      <td><input type="text" name="pbx" id="pbx" value="<?php echo $res['pbx'];  ?>"></td>
    </tr>
	<tr>
      <td><label for="jefe_editorial">jefe_editorial: </label></td>
      <td><input type="text" name="jefe_editorial" id="jefe_editorial" value="<?php echo $res['jefe_editorial'];  ?>"></td>
    </tr>
    <tr>
      <td><label for="fecha_creacion">fecha_creacion: </label></td>
      <td><input type="date" name="fecha_creacion" id="fecha_creacion" value="<?php echo $res['fecha_creacion']; } } ?>"></td>
   
  </table>
<input type="submit" name="Guardar" id="Guardar" value="Actualizar" class="boton1">        
                      
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>

