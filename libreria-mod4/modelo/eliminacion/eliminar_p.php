<?php 
if (isset($_POST['envio'])) 
{
	$lista=$_POST['lista'];
	$e= new Eliminacion_p();
	$e->elim($lista);
}
else
{echo "gg";}

class Eliminacion_p
{
	public function elim($prod)
	{
		include '../../Controlador/base_de_datos.php';
		$con= new Conexion();
		$bd= $con->conm();
		$ocultos=0;
		$consulta="SELECT * From $prod where estado='$ocultos'";
		#echo $consulta;
		$envio=mysqli_query($bd,$consulta);
		switch ($prod)
		 {
			case 'Autores':
				include 'casos/elim_autores.php';
				$elim= new Elim_a();
				$autor=$elim->e_autores($bd,$envio,$prod);
			break;
			case 'Categorias':
				include 'casos/elim_categorias.php';
				$elim= new Elim_Cat();
				$cat=$elim->e_cat($bd,$envio,$prod);

				break;
			case 'Editoriales':
				include 'casos/elim_editorial.php';
				$elim= new Elim_edit();
				$edit=$elim->e_edit($bd,$envio,$prod);

				break;
			case 'Libros':
				include 'casos/elim_libros.php';
				$elim= new Elim_lib();
				$lib=$elim->e_lib($bd,$envio,$prod);
				break;
			case 'Usuarios':
				include 'casos/elim_user.php';
				$elim= new Elim_user();
				$user=$elim->e_user($bd,$envio,$prod);
				
				break;

			default:
				echo "no";
				break;
		}
	}
}

 ?>