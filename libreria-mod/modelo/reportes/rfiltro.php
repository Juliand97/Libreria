<?php 
class filtro_b
{
	public $n_filtro;

	public function  __construct()
	{
		$this->n_filtro=$_POST['lista'];
	}
	public function redireccionar()
	{
		require_once 'info_reporte.php';
	

		$listado=$this->n_filtro;
	

		switch ($listado) 
		{
			case 'Editoriales':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				#echo $this->n_filtro;
				break;
			case 'Libros':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				break;
			case 'Vendidos':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				break;
			case 'Autores':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				break;
			case 'Usuarios':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				break;
			
			default:
				echo "pos no paso nada";
				break;
	}	}
}

$ap= new filtro_b();
$ap->redireccionar();
 ?>