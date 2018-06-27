
<?php
	if(isset($_GET['editar']))/*si clickean en*/{
	
	$ver=new Editar_libro();/*llamado de la clase*/
	$ver_d=$ver->seleccion();/*llamado al metodo*/
	}

	class Editar_libro{

		public $dato_e;
		public function __construct(){

			$this->dato_e=$_GET['editar'];
		}/*asignación del dato a la variable publica*/
		
		public function seleccion(){

			/*conexion a base de datos*/
			$inten= new Conexion();
			$con=$inten->conm();
			/*sentencia SQL*/
			$consulta="SELECT * FROM `libros` WHERE isbn='$this->dato_e'";
			/*Consulta SQL*/
			$ejecutar=mysqli_query($con,$consulta);
			/**/
			$fila= mysqli_fetch_array($ejecutar);/*datos sacados en arreglos de la consulta*/
			$Isbn= $fila['isbn'];
			$Libro= $fila['libro'];
			$Fecha= $fila['fecha'];
			$Editorial= $fila['editorial'];
			$Categoria= $fila['categoria'];
			$Autor= $fila['autor'];
			$Pais_Autor= $fila['pais_de_autor'];
			$Disponibilidad=$fila['compra'];
			/*se deja abierta la funcion ya que más adelante se necesitarán los datos de los arreglos*/
?>

	<!--formulario donde se llenan los datos de la db-->
	<br><br>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="consulta.css">
	</head>	

		<body>
			<form action="" method="POST">
				<p>Actualización de datos</p>
					<table width="190" border=1>
						<tr>
							<td>
								<p>ISBN</p>
								<input type="text" name="isb" value="<?php echo $Isbn; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<p>Libro</p>
								<input type="text" name="libr" value="<?php echo $Libro; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<p>Fecha</p>
								<input type="DATE" name="fech" value="<?php echo $Fecha; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<p>Editorial</p>
								 	<select name=edito>
								 	<?php
										 	include ("../../modelo/editoriales/trae_edit_cons.php"); 
										 	$trae_edit= new t_edit();
										 	$info=$trae_edit->info();
									?>
									</select>
							</td>
						</tr>
						<tr>
							<td>
								<p>Categoria</p>
								<select name="cat">
								 	<?php
										 include ("../../modelo/categorias/trae_cat.php"); 
										 $trae_edit= new t_cat();
										 $info=$trae_edit->info();
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<p>Autor</p>
								<input type="text" name="auto" value="<?php echo $Autor; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<p>Pais de origen</p>
								<input type="text" name="pai_de_aut" value="<?php echo $Pais_Autor; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<p>Dispobilidad</p>
								<select name="estado">
									<option>Disponible</option>
									<option>Vendido o reservado</option>
								</select>
							</td>
						</tr>

					</table>

					<table>
						<tr>
							<td>
								<input type="submit" name="actualizar" value="Actualizar datos" class="boton3">
							</td>
						</tr>
					</table>
				</form>	
		</body>	
<?php
	}
}		
?>
<?php
	if(isset($_POST['actualizar']))/*Si dieron en el boton actualizar*/{

		$update=new Actualizar();/*llamado de la clase*/
		$c=$update->modificar();/*llamado del metodo*/
		echo "
				<script>
					alert('¡Actualización exitosa!')
					window.location.replace('../../Vista/libros/consulta_lib.php');
				</script>";
	
	}
//include ("controlador/base_de_datos.php"); 
	class Actualizar{

		/*variables que resepcionan los datos "variables globales"*/
		public $is;
		public $lib;
		public $fec;
		public $edi;
		public $cate;
		public $aut;
		public $pai_aut;
		public $disp;

		public function __construct(){

			/*asignación de datos*/
			$this->is=$_POST['isb'];
			$this->lib=$_POST['libr'];
			$this->fec=$_POST['fech'];
			$this->edi=$_POST['edito'];
			$this->cate=$_POST['cat'];
			$this->aut=$_POST['auto'];
			$this->pai_aut=$_POST['pai_de_aut'];
			$this->disp=$_POST['estado'];
			/*localización de los datos recolectados en el formulario*/
			$this->dato_e=$_GET['editar'];
		}
		public function modificar()
		{
			/*conexión a la base de datos*/
			$inten = new Conexion();
			$con=$inten -> conm();
			/*sentencia SQL*/
			$actualizar= "UPDATE libros SET isbn='$this->is', libro='$this->lib', fecha='$this->fec', editorial='$this->edi', categoria='$this->cate', autor='$this->aut', pais_de_autor='$this->pai_aut', compra='$this->disp' WHERE isbn='$this->dato_e'";
			 $a=mysqli_query($con,$actualizar);/*ejecución de la actualización*/
		}

	}

?>

