<html>

<head>
    <title>Registrar Libros</title>
	<meta charset="uft-8">

</head>

<body background="imagenes/registra.jpg" text="#FFFFFF">

<p>&nbsp Registro de libros</p>
<form method= "post" action="registrarlibro1.php">

<Table border = "1px">

<tr>
  <td>&nbsp ISBN:</td>
<td><input type = "int" name = "a1"></td>
</tr>

<tr>
<td>&nbsp Libro:</td>
<td><input type = "varchar" name = "b1"></td>
</tr>

<tr>
<td>&nbsp Fecha:</td>
<td><input type = "date" name = "c1"></td>
</tr>

<tr>
<td>&nbsp Editorial:</td>
<td><input type = "varchar" name = "d1"></td>
</tr>

<tr>
<td>&nbsp Categoría:</td>
<td><input type = "varchar" name = "e1"></td>
</tr>

<tr>
<td>&nbsp Autor:</td>
<td><input type = "varchar" name = "f1"></td>
</tr>

<tr>
<td>&nbsp País de autor:</td>
<td><input type = "varchar" name = "g1"></td>
</tr>

</Table> 
 
<br>
<input type="submit" name="guardar" id="guardar" value="Enviar"> 
<br>
</form>
<form action="../menureg.html" method="post">
<input type="submit" value="Menu registro y consulta" >
</form>
</body>

</html>