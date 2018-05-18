<script>
function eliminacion()
{ var confirmacion;
	confirmacion=confirm('¿Desea eliminar este registro?');
	if(confirmacion==true)
	{alert('Eliminando..');
		window.location.replace('eliminar.php')
		window.location.replace('../../vista/editoriales/consulta.php')
	}
	else
	{
		alert('Redireccionando a la pagina de consultas');
		window.location.replace('../../vista/editoriales/consulta.php')
	}
}
var a= new eliminacion();
</script>
