<?php 
/*Aqui tenemos el modulo de busqueda que basicamente y casi en su totalidad se repite en los siguientes archivos de la carpeta y como se mencionó antes estos son archivos parametrizadores 
Glosario 
!empty=diferente de valor nulo es decir que si la variable está declarada y adicional a ello esta llena.
$_REQUEST[]=Es la forma global de recibir archivos $_GET o $_POST. Generalmente esta es más utlizada en los valores que se envian por $_GET.*/
require_once '../seguridad/inter/seguridad_cliente.php';
require_once '../../Vista/busqueda/busqueda.php';
require_once '../../Modelo/busqueda/Busqueda.php';
require_once '../../Modelo/busqueda/Limpiar.php';
$b= new Busqueda;
$Limpiar= new Limpiar;

if (!empty($_POST['enviar']))
{
	$dato=$_POST['libro'];
	$caracteres=$Limpiar->caracteres($dato);
	
	$selec=$b->seleccion($caracteres);
	require_once '../../Vista/busqueda/busqueda_r.php';
}

if (!empty($_REQUEST['id']) and !empty($_REQUEST['cant']))
	{
		$isbn=$_REQUEST['id'];
		$cant=$_REQUEST['cant'];
		$caracteres=$Limpiar->caracteres2($isbn,$cant);
		$reconstruccion_datos=implode(",",$caracteres);
		list($isbn1,$cant1)=explode(",",$reconstruccion_datos);
		$reserva=$b->reserva($isbn1,$cant1);
	}
 ?>	