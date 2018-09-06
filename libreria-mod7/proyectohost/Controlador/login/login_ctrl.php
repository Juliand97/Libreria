<?php
/*Recepcion de informacion y envio a su respectivo procesamiento */
require_once '../../Vista/login/login.php';
require_once '../../Modelo/login/Login.php';


$log= new Login;
if (!empty($_POST['submit']))
{
 	$user=$_POST['name'];
  	
 	$pass=$_POST['contraseña'];
 
 	$entrar=$log->logueo($user,$pass);
 	
} 
 ?>