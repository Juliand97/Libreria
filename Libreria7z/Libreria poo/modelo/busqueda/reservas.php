<?php
 include ("../controlador/Base_de_datos_ej.php");
 class Reserva 
 {
	 Public $r;
	 public function __construct()
	 {
		 $this->r= $_GET['reserva'];
	 }
	 public function compra_l()
	 {
		 $inten= new Conexion();
			$con=$inten->conm();
		$comprar=("UPDATE libros set compra='vendido' where libro='$this->r'");	
		$p_vendido=mysqli_query($con,$comprar);
		if($p_vendido==true)
		{
			echo "<script>
			alert('Producto reservado')
			window.location.replace('../vista/pag_cliente.php');
			</script>";
			
		}
		else
		{
			echo "<script>alert('lo sentimos pero este libro no lo tenemos en el momento')</script>";
		}
	 }
	 
 }
 $libro_c= new Reserva();
 $add=$libro_c->compra_l();
?>