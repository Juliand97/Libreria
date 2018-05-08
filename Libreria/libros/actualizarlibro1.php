<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["isbn"];

$hostname_db = "localhost";
$database_db = "libreria";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from libros where isbn='$zz'";
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
<html>
<body background="imagenes/registro.jpg">
<form name="form1" method="post" action="actualizarlibro2.php?tipo=registrar">

  <p>Formulario de Actualizacion</p>
  <table width="200" border="1">
    <tr>
      <td>Id:</td>
      <td><input type="bigint" name="isbn" nombre="isbn" value="<?php echo $res['isbn'];?>"></td>
    </tr>
    <tr>
      <td>Libro:</td>
      <td><input type="text" name="libro" nombre="libro" value="<?php echo $res['libro'];?>"></td>
    </tr>
    <tr>
      <td>Fecha: </td>
      <td><input type="date" name="fecha" id="fecha" value="<?php echo $res['fecha'];?>"></td>
    </tr>
    <tr>
      <td><label for="editorial">Editorial: </label></td>
      <td><input type="text" name="editorial" id="editorial" value="<?php echo $res['editorial'];  ?>" ></td>
    </tr>
	<tr>
      <td><label for="categoria">Categoria: </label></td>
      <td><input type="text" name="categoria" id="categoria" value="<?php echo $res['categoria'];  ?>" ></td>
    </tr>
	<tr>
      <td><label for="autor">Autor: </label></td>
      <td><input type="text" name="autor" id="autor" value="<?php echo $res['autor'];  ?>" ></td>
    </tr>
    <tr>
      <td><label for="pais_de_autor">Pais de autor: </label></td>
      <td><input type="text" name="pais_de_autor" id="pais_de_autor" value="<?php echo $res['pais_de_autor']; } } ?>" ></td>
    </tr>
   
    <tr>
      <td><input type="submit" name="Guardar" id="Guardar" value="Actualizar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
    <label for="Nombre"></label>
  </p>
</form>

</body>
<form method="post" action="../menureg.html">
	<input type="submit" value="Volver a registros y consultas">
	</form>
</html>




