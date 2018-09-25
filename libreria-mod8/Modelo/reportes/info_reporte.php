<?php
class info
{
	public $o;
	Private $db;
	private $activo;
	private $inactivo;
	private $estado;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
		$this->activo=1;
		$this->inactivo=0;
		$this->estado="Disponible";
	}
	public function traer($o) 
	{	
		$dato=strtolower($o);	
		#echo $dato;	
		$tabla="SELECT * from $dato";
		$traer=$this->db->query($tabla);
		switch ($dato) {
			case 'editorial':
				include "filtro-tablas/editoriales.php";
				$info= new a_edit;
				$info_c= $info->arreglo($traer);
				break;
			case 'libro':
				include "filtro-tablas/libros.php";
				$info= new a_libro();
				$info_c= $info->arreglo($traer);
				break;
			case 'usuario':
				include "filtro-tablas/clientes.php";
				$info= new a_cliente();
				$info_c= $info->arreglo($traer);
				break;
			case 'autor':
				include "filtro-tablas/autores.php";
				$info= new a_autor();
				$info_c= $info->arreglo($traer);
				break;
			case 'historial':
				include "filtro-tablas/vendidos.php";
				$info= new a_vendido;
				$info_c= $info->arreglo($traer);
				break;
			default:
				echo "<script>
					alert('Lo sentimos pero no hay informacion disponible')
				</script>"	;
				break;
		}
	}
}
?>