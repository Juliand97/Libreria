<html>
	<body background="imagenes/categoriaf.jpg" text="#FFFFFF">
	<center>
		<form action="reg(mod).php" method="post">
		<p> Registro de categorias</p>
			<input type="text" id=reg name="reg" placeholder="Numero de registro"><br>
			<br><label>seleccione una categoria<br>  <id=lista><select name="lista">
				<option value="Historia" id="historia" name="historia">Historia</option>
				<option value="Literatura" id="literatura" name="literatura">Literatura</option>
				<option value="Filosofia" id="filosofia" name="filosofia">Filosofia </option>
				<option value="Arte" id="arte" name="arte">Arte</option>
				<option value="ciencia" id="ciencia" name="ciencia">Ciencia</option>
				</select></label>
			<p><input type="text" id=sub name="sub" placeholder="Nombre de la subcategoria"></P></br>
			<input type="text" id=sub1 name="sub1" placeholder="Nombre de la subcategoria">
			<br><br>
			<table>
			<tr><td><br>
			<input type="submit" id="envio" value="Enviar datos"></td><td>
		</form>
		<br><br>
		<form action="../menureg.html" method="post">
		<input type="submit" value="Regresar a menu registro consultas">
		</form></td></tr></table>
		
		</center>
	</body>
</html>
