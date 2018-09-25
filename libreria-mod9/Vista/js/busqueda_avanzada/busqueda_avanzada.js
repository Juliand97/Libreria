<script>
function consulta_a()
{ var mensaje,confirmacion,redireccion;
	mensaje=alert('Informacion no relacionada');
	confirmacion=confirm('¿Desea realizar una consulta avanzada?');
	if(confirmacion==true)
	{alert('Inicializando consulta avanzada..');
		window.location.replace('../../Vista/busqueda/busqueda avanzada.php')
	}
	else
	{alert('Gracias por visitarnos.\n Recuerde visitar  nuestras otras secciones ..');
	window.location.replace('../../Vista/pag_cliente.php')}
}
var a= new consulta_a();
</script>