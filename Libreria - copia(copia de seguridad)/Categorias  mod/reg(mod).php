<?php
	$con = mysqli_connect("localhost","root","" ,"libreria") or die ("Error");

 $a= $_POST ['reg'];
 $b= $_POST ['lista'];
 $c= $_POST ['sub'];
 $d= $_POST ['sub1']; 
$enviar= "INSERT INTO `categorias`(`idcategoria`, `nombrecategoria`, `subncategoria1`, `subncategoria2`) VALUES ('$a','$b','$c','$d')";

$ejecutar= mysqli_query($con,$enviar);
	
	if($ejecutar)
	{echo "<script> alert ('hecho')
	window.location.replace('consulta(mod).php');
	</script>";}

		  
   
	  
 
?>