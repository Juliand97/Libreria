<?php 
/*Esta clase es un poco diferente a las otras pero muy similar a la de login como lo evidenciarán más adelante o lo evidenciaron depende el orden de lectura que hayan tomado ya que estas clases utilizan las consultas en join que son consultas entre tablas que sin crear relaciones entre si solo generando una busqueda por cohincidencia */
Class Busqueda
{
	Private $db;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
	}

	public function seleccion($dato)
	{
		$estado=1;
		$consulta="SELECT * FROM libros where estado='$estado' and  libro like'%$dato'";
		$envio=$this->db->query($consulta);
		$fila = mysqli_fetch_array($envio);
		if ($fila==null)
		{
			
				echo "<script>
			alert('lo sentimos pero este libro no lo tenemos en el momento')
			window.location.replace('../busqueda_avanzada/busqueda_avanzada_ctrl.php')
			</script>";
			
		}
		else
		{
			
			return $fila;
		}
		
	}

	public function reserva($isbn,$cant)
	{
		$quitar=$cant;
		#echo $quitar;
	 	$consulta= "SELECT isbn,isbn_c,libro,sum(cant_ingresada) as entrantes,sum(cant_reservada) as prestados,sum(cant_ingresada)-sum(cant_reservada) as existencia from historial inner join libros WHERE isbn='$isbn' and isbn_c=isbn";
		$envio=$this->db->query($consulta);
		
		$info=mysqli_fetch_array($envio);
		 $isbn=$info['isbn'];
		 $libro=$info['libro'];
		 $cant=$info['entrantes'];
		 $salida=$info['prestados'];
		 $total=$info['existencia'];

		if ($total<=0) 
		{
			$cerrar_venta="UPDATE `libros` SET compra='vendido' WHERE isbn='$isbn'";
			$envio=$this->db->query($cerrar_venta);
			echo "<script>
			alert('lo sentimos pero este libro no lo tenemos en el momento')
			window.location.replace('../../Vista/pag_cliente.php')
			</script>";

		}
		else
		{
			$des="Reserva de libro con isbn: ".$isbn;
			$envio="INSERT into historial (id_u,isbn_c,Descripcion,fecha_de_entrada,cant_ingresada,fecha_de_salida,cant_reservada,cant_lib_dev,fecha_de_devolucion) values('$isbn','$isbn','$des','N/A','0',NOW(),'$quitar','0','N/A')";
			#echo $envio;
			$envio=$this->db->query($envio);
			echo "<script>
						alert('Producto reservado con exito')
						window.location.replace('../../Vista/pag_cliente.php');
				 </script>";		
		}
	}

	public function busqueda_visitante($libro)
	{
		$estado=1;
		$consulta="SELECT * FROM libros where estado='$estado' and  libro like'%$libro'";
		$envio=$this->db->query($consulta);
		if ($envio==false)
		{
			
			echo "<script>window.location.replace('../../Vista/js/busqueda_avanzada/busqueda_avanzada.js')</script>";
			
		}
		else
		{
			$fila = mysqli_fetch_array($envio);
			return $fila;
		}
	}
	public function busqueda_avanzada($libro,$autor,$edit)
	{
		$estado=1;
		$consulta="SELECT * FROM libros where estado='$estado' and  (libro like'%$libro' or autor like'%$autor' or editorial like '%edit')";
		$envio=$this->db->query($consulta);
		if ($envio==false)
		{
			echo "<script>window.location.replace('../../Vista/js/busqueda_avanzada/busqueda_avanzada.js')</script>";
		}
		else
		{
			$fila = mysqli_fetch_array($envio);
			echo "<script>
						alert('Producto reservado con exito')
						window.location.replace('../../Vista/pag_cliente.php');
				 </script>";
			return $fila;
		}
	}
	
}

 ?>