<?php 

?>	
<html>
	<head>
	<!--<link rel="stylesheet" href="buscar_li.css">-->
	<style>
	body
{
	margin:0;
	color:white;
	/*background-size:100px 72px;*/
}
form
{
	width:400px;
	height: 155px;
	text-align:center;
	background-color: rgba(155, 114, 91, 0.4);
	border-radius:50px;
	border-color:red;
	margin:auto;
	margin-top:10px;
}
.envio
{
	padding: 15px 25px;
	cursor:pointer;
	color: white;
	border: 5px outset ;
	border-radius: 11px;
	border-color: blue;
	background:rgba(0,0,255,0.2);
}
.envio:hover
{
	padding: 15px 25px;
	cursor:pointer;
	color: white;
	border: 5px inset ;
	border-radius: 11px;
	border-color: blue;
	background:rgba(0,0,255,0.2);
}
.imagen
{
width:10px;
background:blue;
border:20px;
border-color:yellow;
}
	</style>
	</head>
	<body>
		<form action="../modelo/busqueda visitante/buscar_libro.php" method="post">
			<p>Por favor diligencie los siguientes datos</p>
			<p>Nombre del libro</p><input type="text" placeholder="Nombre del libro" id="libro"  name="libro" autofocus required>
			<br><br><input type="submit" value="Solicitar" name="enviar" class="envio">
		</form>
	</body>
	
</html>