<?php
include ("../../controlador/base_de_datos.php");

class info
{
	public $o;
	public function traer($o) 
	{	


		$conexion= new conexion();
		$get=$conexion->conm();
		$tabla="SELECT * from $o";
	
		$traer=mysqli_query($get,$tabla);
		switch ($o) 
		{
			case 'Editoriales':
				include "filtro-tablas/editoriales.php";
					$info= new a_edit();
				$info_c= $info->arreglo($traer);
			break;

			case 'Libros':
				include "filtro-tablas/libros.php";
					$info= new a_libro();
				$info_c= $info->arreglo($traer);
			break;

			case 'Vendidos':
				include "filtro-tablas/vendidos.php";
				$arreglo= new a_vendido();
				$info_v= $arreglo->arreglo($traer);
			break;

			case 'Autores':
				include "filtro-tablas/autores.php";
					$info= new a_autor();
				$info_c= $info->arreglo($traer);
			break;

			case 'Usuarios':
				include "filtro-tablas/clientes.php";
				$info= new a_cliente();
				$info_c= $info->arreglo($traer);
			break;
			
			default:
				# traer los obj de cada clase y pasarles el dato despues hacer el mismo switch pero invocando las fx 
			break;
		}
	
		
	}
}
?>