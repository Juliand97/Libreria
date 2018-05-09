<script>
function tiempo()
{
	var cerrar="../../Controlador/cerrar sesion.php";
	setTimeout(function(){alert('Limite de tiempo de sesion excedido'); window.location=cerrar;},900000);
}
var a= new tiempo();
</script>