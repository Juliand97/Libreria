<html>
	<head>
	<link rel="stylesheet" type="text/css" href="Reporte.css">
	<script language="javascript">
	function descarga()
	{
		var confirmar= alert('Descargando archivo ..');
		window.location.replace('../../Controlador/Excel/PHPExcel-1.8/rep.php');
	}
	</script>
	</head>
	<body >
	<table class="reportes" >
	<td>
		<img src="imagenes/excel2013.png" onclick="descarga()" class="img">
		<p  onclick="descarga()" class="texto">Generar reporte</p>
		</td>
		</table>
	</body>
</html>