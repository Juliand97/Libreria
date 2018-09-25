<?php 
	session_start();
	if($_SESSION['cliente']==0){
		header("location:../../Vista/pag_cliente.php");
	}
 ?>