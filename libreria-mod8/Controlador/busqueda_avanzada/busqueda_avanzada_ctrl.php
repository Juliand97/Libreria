<?php 
/*Aqui tenemos el modulo de busqueda que basicamente y casi en su totalidad se repite en los siguientes archivos de la carpeta y como se mencionó antes estos son archivos parametrizadores  la diferencia es que este tiene un intermediario mas el cual es un archivo js */
require_once '../../Vista/js/busqueda_avanzada/busqueda_avanzada.js';
require_once '../../Modelo/busqueda/Busqueda.php';
require_once '../../Modelo/busqueda/Limpiar.php';
$b= new Busqueda;
$Limpiar= new Limpiar;
if (!empty($_POST['enviar']))
{
	$libro=$_POST['libro'];
	$caracteres=$Limpiar->caracteres($dato);
	$buscar=$b->busqueda_visitante($caracteres);
	require_once '../../Vista/busqueda visitante/busqueda_r.php';	
	
	
}
 ?>