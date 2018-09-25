<?php 
require_once '../../Vista/correo/formulario.php';
require_once '../../Modelo/correo/Email.php';
require_once '../../Modelo/correo/Genera_cod.php';
if (!empty($_POST['envio'])) 
{
	$id=$_POST['identificacion'];
	$nom=$_POST['user'];
	$correo=$_POST['email'];
	$generar= new Genera_cod;
	$cod=$generar->codigos();
	$verificar=$generar->indice($id,$cod);
	$email= new email($id,$nom,$correo,$cod);
	$datos=$email->envios();
	
}
 ?>