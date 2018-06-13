<?php
include ("../../controlador/Base_de_datos.php");
include("../../controlador/seguridad/seguridad_cliente.php"); 	
#session_start();
 class Reserva 
 {
 	public $dato1;
 	public $dato2;
 	public $name;

 	public function __construct()
 	{
 		
 		$this->dato1=$_POST['cant'];
 	}
	 public function compra_l()
	 {
	 	
	 	$_SESSION['libro_i'];#viene de la consulta de la reserva
	 	$quitar=$this->dato1;

	 	echo $_SESSION['libro_i'];

	 	$inten= new Conexion();
		$con=$inten->conm();

		$comprar="UPDATE cantidad set cant_existente=(cant_existente-$quitar) WHERE isbn='$_SESSION[libro_i]'";
		echo $comprar;

		$p=mysqli_query($con,$comprar);
		
		/**/
	 } 
	 public function novedad()
	 {
	 	$_SESSION['libro_i'];
	 	$quitar=$this->dato1;
		echo $quitar;
	 	$inten= new Conexion();
		$con=$inten->conm();
	 	$consulta= "SELECT isbn,isbn_c,libro,sum(cant_ingresada) as entrantes,sum(cant_reservada) as prestados,sum(cant_ingresada)-sum(cant_reservada) as existencia from historial inner join libros WHERE isbn='$_SESSION[libro_i]' and isbn_c=isbn";
		$envio=mysqli_query($con,$consulta);
		
		$info=mysqli_fetch_array($envio);
		 $isbn=$info['isbn'];
		 $libro=$info['libro'];
		 $cant=$info['entrantes'];
		 $salida=$info['prestados'];
		 $total=$info['existencia'];
		if ($total<=0) 
		{
			$cerrar_venta="UPDATE `libros` SET compra='vendido' WHERE isbn='$_SESSION[libro_i]'";
			$envio=mysqli_query($con,$cerrar_venta);
			echo "<script>
			alert('lo sentimos pero este libro no lo tenemos en el momento')
			window.location.replace('../../Vista/e/consulta.php')
			</script>";

		}
		else
		{
			$des="Reserva de libro con isbn: ".$_SESSION['libro_i'];
			$envio="INSERT into historial (id_u,isbn_c,Descripcion,fecha_de_entrada,cant_ingresada,fecha_de_salida,cant_reservada) values('$_SESSION[libro_i]','$_SESSION[libro_i]','$des','N/A','0',NOW(),'$quitar')";
			echo $envio;
			$registra=mysqli_query($con,$envio);
			echo "<script>alert('Producto reservado con exito') </script>";
			header("Location: ../../Vista/pag_cliente_log.php");
		}
		
	 }
	 
 }
 $nuevbo= new Reserva();
 $nuevbo->compra_l();
 $nuevbo->novedad();
?>