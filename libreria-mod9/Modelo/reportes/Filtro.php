<?php 
class Filtro
{
	public $n_filtro;

	public function  __construct($n_filtro)
	{
		 $this->n_filtro=$n_filtro;
	}
	public function redireccionar()
	{
		require_once 'info_reporte.php';
		$listado=$this->n_filtro;
		if (!empty($listado))
		{
			$informacion= new info($listado);
			$tabla=$informacion->encabezado();
			$cont=$informacion->traer();
			$generar=$informacion->generar_reporte($tabla,$cont);
			
			require_once '../../Vista/Reportes/Reportes.php';
			
		}
		
	}	
}
 ?>