<html>
	<head>
	<link rel="stylesheet" type="text/css" href="Reportes.css">
	<script language="javascript">
	function descarga()
	{
		var confirmar= alert('Descargando archivo ..');
		window.location.replace('../../Controlador/Excel/PHPExcel-1.8/rep.php');
	}
	</script>
	</head>
	<body>
		<img src="../imagenes/excel2013.png" onclick="descarga()" class="boton">
		<p onclick="descarga()" class="boton">Generar reporte</p>
	</body>
</html>