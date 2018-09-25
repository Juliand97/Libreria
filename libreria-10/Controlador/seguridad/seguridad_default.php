 <?php 
	session_start();
	if($_SESSION['default']==0){
		header("location:pag_visitante.php");
	}
 ?>