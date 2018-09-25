<?php 
/*Activador de cierre de sesion*/
require_once '../../Modelo/login/Login.php';
$log= new Login;
$logout=$log->logout();
 ?>