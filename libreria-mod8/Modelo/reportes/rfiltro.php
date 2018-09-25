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
	

		$list=$this->n_filtro;
		$listado=strtolower($list);
	

		switch ($listado) 
		{
			case 'editorial':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				#echo $this->n_filtro;
				break;
			case 'libro':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				break;
			case 'historial':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				break;
			case 'autor':
				$informacion= new info();
				$trae= $informacion->traer($listado);
				break;
			case 'usuario':
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