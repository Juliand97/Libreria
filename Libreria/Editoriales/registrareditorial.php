<html>

<head>
    <title>Registrar editoriales</title>
	<meta charset="uft-8">
</head>

<body background="imagenes/registrar.jpg">
<p>Registro de editoriales</p>
<form method= "post" action="registrareditorial1.php">

<Table border = "1px">

<tr>
<td>Codigo postal:</td>
<td><input type = "int" name = "a1"></td>
</tr>

<tr>
<td>ubicacion:</td>
<td><input type = "varchar" name = "b1"></td>
</tr>

<tr>
<td>telefono:</td>
<td><input type = "int" name = "c1"></td>
</tr>

<tr>
<td>correo:</td>
<td><input type = "email" name = "d1"></td>
</tr>

<tr>
<td>pbx:</td>
<td><input type = "int" name = "e1"></td>
</tr>

<tr>
<td>jefe editorial:</td>
<td><input type = "varchar" name = "f1"></td>
</tr>

<tr>
<td>fecha creacion:</td>
<td><input type = "date" name = "g1"></td>
</tr>

</Table> 
 
<br>
<input type="submit" name="guardar" id="guardar" value="Enviar"> 
<br>
</form>
<form action="../menureg.html" method="post">
<input type="submit" value="Menu registro y consultas">
</form>
</body>

</html>