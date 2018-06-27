<?php 
	session_start();
	if($_SESSION['default']==0){
		header("location:../vista/pag_cliente.php");
	}
 ?>