<html>
	<head>
		<link rel="stylesheet" href="../../Vista/css/busqueda_visitante/estilos_buscar.css">
		<link rel="stylesheet" href="../../Vista/css/busqueda_visitante/estilos.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minium-scale=1.0">
	<style type="text/css">
form
{
	position: relative;
	width:65%;
	height: 75%;
	text-align:center;
	background-color: rgba(155, 114, 91, 0.4);
	border-radius:50px;
	border-color:blue;
	margin:auto;
	margin-top:10px;
	color:white;
}

.envio
{position: relative;
	
	margin: -5%;
	padding: 4% 12%;
	cursor:pointer;
	color: white;
	border: 5px outset ;
	border-radius: 11px;
	border-color: blue;
	background:rgba(0,0,255,0.2);
}

.envio:hover
{
	padding: 6% 5px;
	cursor:pointer;
	color: white;
	border: 5px inset ;
	border-radius: 11px;
	border-color: blue;
	background:rgba(0,0,255,0.2);
}

.base
{
top:10%;	
  width: 32%;
  height: 46%;
  margin:0 auto;
  left:30%; 
  position: absolute;
  border:10px solid #888;
  border-style: inset;
  perspective: 700px;
}

.cara1
{
	width: 100%;
	height: 100%;
	position: absolute;
	border-radius: 10%;
	border: 1px solid;
	border-color: blue;
	border-style: outset;
	-webkit-transform-style: preserve-3d;
	transition: transform 500ms ease-in-out;

}
.lupa
{
	width: 100%;
	height: 40%;
	left: -20%;
	margin: 20%;
	position: absolute;
border-style: outset;

	background-color: rgba(255, 255, 192, 0.3);
	-webkit-transform-style: preserve-3d;
	transition: transform 500ms ease-in-out;
}
.imagen
{
	width: 20%;
	height: 80%;
	line-height: center;
	left: 40%;
	border-style: outset;
	position: absolute;
	border-radius: 10%;
	-webkit-transform-style: preserve-3d;
	transition: transform 500ms ease-in-out;
}

.base:hover .cara1
{
    transform: rotateY(180deg);
}

figure
{
	position: absolute;
	width: 100%;
	height: 100%;
	margin:0;
	display: block;
	background-color:blue;
	border-radius: 10%;
	backface-visibility: hidden;
}

figure.cara2
{
	display: block;
	padding: 10px 0 0 0 ;
	color: #fff;
	background:-webkit-gradient(radial, 25 53, 0, 250 204, 280, from(#0F1901), to(#261593));
	border-radius: 10%;
	border: 1px solid;
	border-color: yellow;
	border-style: outset;
	transform: rotateY(180deg);
}

#libro
{
	position: relative;
	margin:15%; 
	color:#000000;
	
}

.text
{
	position: relative;
	margin: 10%;
}
	</style>

	<script src="../../Vista/js/validacion datos/busqueda_visitante/validacion.js"></script>
	</head>
	<body oncontextmenu="return false" >
	<div id="particles-js">
		<div class="base">

			<div class="cara1">
				<div class="lupa">
					<img src="../../Vista/img/busqueda_visitante/lupa.png" class="imagen">
				</div>
				
			<script>
				
			</script>
			<figure class="cara2">
				<form action="busqueda_visitante_ctrl-r.php" method="post" onsubmit="return validar();">
				<p class="text">Por favor diligencie los siguientes datos</p>
				<input type="text" placeholder="Nombre del libro" id="libro"  name="libro" autofocus onkeypress=" return caracteres(event);" >
				<br><br>
				<input type="submit" value="Solicitar" name="enviar" class="envio" >
				<br>
				<br>
				<br>
				<br>
				<a href="../../Vista/pag_visitante.php" style="font-weight: bold; color:#fff;">Regresar a inicio</a>

			</form>
				<script src="../../Vista/js/particulas/particles.js"></script>
				<script src="../../Vista/js/particulas/particulas.js"></script>
			</div>
		</div>
		</figure>
	</div>
	</body>	
</html>
