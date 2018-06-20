<?php

	if (isset ($_GET['editar']))
		{
			$ver=new editar ();
			$ver_d=$ver->seleccion ();
		}
	
	class editar
	{
		public $dato_e;
		public function __construct()
		{$this->dato_e=$_GET['editar'];}
		
		public function seleccion()
		{
			$inten=new conexion();
			$con=$inten->conm();
			$consulta="select * from editoriales where codigo_postal='$this->dato_e'";
			$ejecutar=mysqli_query($con,$consulta);
			$fila=mysqli_fetch_array($ejecutar);
			
				$codigo_postal=$fila['codigo_postal'];
				$nombre_e=$fila['nombre_e'];
				$ubicacion=$fila['ubicacion'];
				$telefono=$fila['telefono'];
				$correo=$fila['correo'];
				$pbx=$fila['pbx'];
				$jefe_editorial=$fila['jefe_editorial'];
				$fecha_creacion=$fila['fecha_creacion'];
				
?>

<head>
<!--link rel="stylesheet" href="consulta.css"-->
</head>
<body >
<form name="form1" method="post" action="">
  <!--p>Formulario de Actualizacion </p-->
  <table width="200" border="1" class="table2">
    
	<tr>
      <td>codigo_postal: </td>
      <td><input type="text" name="codigo_postal" id="codigo_postal" value="<?php echo $codigo_postal;?>"></td>
    </tr>
    <tr>
      <td>nombre_editorial: </td>
      <td><input type="text" name="nombre_editorial" id="nombre_editorial" value="<?php echo $nombre_e;?>"></td>
    </tr>
    <tr>
      <td>ubicacion: </td>
      <td><input type="text" name="ubicacion" id="ubicacion" value="<?php echo $ubicacion;?>"></td>
    </tr>
    <tr>
      <td><label for="telefono">telefono: </label></td>
      <td><input type="text" name="telefono" id="telefono" value="<?php echo $telefono;  ?>"></td>
    </tr>
	<tr>
      <td><label for="correo">correo: </label></td>
      <td><input type="email" name="correo" id="correo" value="<?php echo $correo;  ?>"></td>
    </tr>
	<tr>
      <td><label for="pbx">pbx: </label></td>
      <td><input type="text" name="pbx" id="pbx" value="<?php echo $pbx;  ?>"></td>
    </tr>
	<tr>
      <td><label for="jefe_editorial">jefe_editorial: </label></td>
      <td><input type="text" name="jefe_editorial" id="jefe_editorial" value="<?php echo $jefe_editorial;  ?>"></td>
    </tr>
	<tr>
      <td><label for="fecha_creacion">fecha_creacion: </label></td>
      <td><input type="date" name="fecha_creacion" id="fecha_creacion" value="<?php echo $fecha_creacion; } } ?>"></td>
  
  <input type="submit" name="actualizar"  value="Actualizar" class="boton3">
  </table>
        
  <p>&nbsp;</p>
  <p>&nbsp;</p>

	</form>
	</body>			
			
<?php
		if (isset($_POST['actualizar']))
		{
			$update=new Actualizar();
			$c=$update->modificar();
			echo "<script>window.location.replace('../../vista/editoriales/consulta.php')</script>";
		}
		
class Actualizar
	{	
		public $ide;
		public $nom_e;
		public $ubi;
		public $tel;
		public $email;
		public $pbx;
		public $jefe_edi;
		public $fecha_cre;
		
		public function __construct()
		{
			$this->ide=$_POST ['codigo_postal'];
			$this->nom_e=$_POST['nombre_editorial'];
			$this->ubi=$_POST ['ubicacion'];
			$this->tel=$_POST ['telefono'];
			$this->email=$_POST ['correo'];
			$this->pbx=$_POST ['pbx'];
			$this->jefe_edi=$_POST ['jefe_editorial'];
			$this->fecha_cre=$_POST ['fecha_creacion'];
			
			$this->dato_e=$_GET ['editar'];
			
		}
		
		public function modificar ()
		
		{
			$inten=new Conexion ();
			$con=$inten->conm();
			$actualizar="UPDATE editoriales SET codigo_postal= '$this->ide',nombre_e= '$this->nom_e' , ubicacion= '$this->ubi',correo= '$this->email',telefono= '$this->tel', pbx= '$this->pbx',fecha_creacion= '$this->fecha_cre',jefe_editorial= '$this->jefe_edi' WHERE codigo_postal='$this->dato_e'";
			return $a=mysqli_query ($con,$actualizar);
		}
	}
?> 