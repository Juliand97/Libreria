<?php
class info
{
	public $th;
	private $db;
	private $tablas;
	private $abc;
	public $td;

	public function __construct($tabla)
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
		$this->th=array();
		$this->td=array();
		$this->abc=array();
		$this->tablas=$tabla;

	}

	public function encabezado()
	{
	 	$tabla=strtolower($this->tablas);
	 	$sql=$this->db->query("SHOW columns from $tabla");
	 	while($traer=mysqli_fetch_array($sql))
	 	{
	 		$this->th[]=$traer;
	 	}

	 	return $this->th;
	 	
	}

	public function traer() 
	{	
		$tabla="SELECT * from $this->tablas";
		$traer=$this->db->query($tabla);
		while($contenido=mysqli_fetch_array($traer))
		{
			$this->td[]=$contenido;
		}	
		#print_r($this->td);
		return $this->td;
	}

	public function generar_reporte($titulos,$contenido)
	{
		echo "aqui en la fn \n";
		$tabla_excel=array();
		$cont_excelnum=array();
		$cont_excel=array();
		require_once '../../Modelo/reportes/info-error_reporte.php';
		require_once '../../Controlador/Excel/PHPExcel-1.8/Classes/PHPExcel.php';
		$error=new mostrar_error();
		$a=$error->error_rep();
		$b=$error->no_console();

		$objPHPExcel= new PHPExcel();
		$objPHPExcel->getProperties()->setCreator("Libreria")
						->setLastModifiedBy("Admin")
						->setTitle("Office 2007 XLSX Test Document")
						->setSubject("Office 2007 XLSX Test Document")
						->setDescription("reporte")
						->setKeywords("office 2007 openxml php")
						->setCategory("reporte");

		for ($i=65; $i <=90 ; $i++)
		{ 
			$this->abc[]=chr($i);		 
		}
		
		foreach ($titulos as $key )
		{		
			$ad=array_chunk($key, 2);
			$tabla_excel[]=$ad;	
		}
	
		for ($i=0; $i<=count($titulos); $i++) 
		{ 
			if ($i==count($titulos))
			{
				count($titulos)-1;
			}
			else
			{
				$objPHPExcel->setActiveSheetIndex(0)
				->setCellValue($this->abc[$i].'1',$tabla_excel[$i][0][0]);
			}
		}
		for ($j=2; $j <=count($titulos) ; $j++) 
		{ 
			$cont_excelnum[]=$j;
		}
		#print_r($cont_excelnum);	
		#echo count($titulos);
		foreach ($contenido as $reg) 
		{
			$cont_excel[]=$reg;
		}
		#print_r($cont_excel);
		
		for($i=0; count($contenido)==count($titulos) ;$i++)
		{ 		
				if ($i==count($titulos))
				{
					count($titulos)-3;
				}
				else
				{
					echo $i;
					echo $cont_excelnum[$i];
				}
		}
			
		
	}
}
?>