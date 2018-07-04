<html>
	<head>
	<link rel="stylesheet" href="busqueda avanzada.css">
	<script>
		function llamar()
		{
			if ($(document).ready){
			document.getElementById("activaventana").style.visibility=true
			}
		}
	</script>
	</head>
<body background="../imagenes/busqueda_avanzada.jpg">
<input type="checkbox" onClick="llamar()" name="activaventana" id="activaventana">
<label for="activaventana" id="abremodal">Abre</label>
	<form action="../../modelo/busqueda/b_lib_avan.php" method="post" class="vermodal">
	<label for="activaventana" id="cierramodal">X</label>
	<p>Nombre del libro<br><input type="text" placeholder="Libro" name="libro" required class="texto"></p>
	<p>Autor<br><input type="text" placeholder="Autor" name="autor" required class="texto"></p>
	<p>Editorial<br><input type="text" placeholder="Editorial" name="editorial" class="texto"></p>
	<label class="texto" >Selecciona si quieres mas opciones<br><select name="opcionales">
	<option>Fecha de lanzamiento</option>
	<option>Pais del autor</option>
	<option>Tematica</option><br><br>
	<input type="text" autofocus class="texto"><br>
	</select>
	</label><br><br>
	<input type="submit" Value="Consultar" name="enviar" class="enviar">
	<a href="../../Vista/pag_cliente_log.php">Volver a inicio</a>
	</form>
	
</body>
</html>