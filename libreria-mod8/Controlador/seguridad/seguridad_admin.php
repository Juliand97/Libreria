<?php 
/*Verificacion del valor de las variables de sesion para poder ceder o denegar paso a determinada pagina */
	session_start();
	if($_SESSION['admin']==0){
		header("location:pag_visitante.php");
	}
 ?>