<?php
/*header('Content-Type: application/vdn.ms-excel');
header('Content-Disposition: attachment; filename=Reporte libreria.xls');
include('../base_de_datos.php');	
include ('Classes/PHPExcel.php');
Class Reportes
{


	public function hacer_reporte()
	{

		$excel= new PHPExcel();
		$excel->getProperties()->setCreator('Sistema de inventarios')->setLastModifiedBy('Julian Pirachican')->setTitle('Reportes');
		$excel->setActiveSheetIndex(0);

		$paginas= $excel->getActiveSheet();
		$paginas->setTitle('Libros');
		$con->set_charset=('utf8');
		$conex= new conexion();
		$conex2= $conex->conm();
		$consulta= $con->prepare($conex2,'SELECT * from libros');
		$consulta->execute();
		$resultado=$consulta->get_result();

		while($fila= $resultado->fetch_array()){$libro[]=$fila;}
			$paginas->setCellValue('A1','Isbn');
			$paginas->setCellValue('B1','Libro');
			$paginas->setCellValue('C1','Fecha');
			$paginas->setCellValue('D1','Editorial');
			$paginas->setCellValue('E1','Categoria');
			$paginas->setCellValue('F1','Autor');
			$paginas->setCellValue('G1','Nacionalidad del autor');

			$estilo = array
			 (
			    'font'  => array
				(
			        'bold'  => true,
			        'size'  => 12,
			        'name'  => 'Colonna MT'
			    )
				,
				'borders'=>array
				(
					'allborders'=>array
					(
						'style'=>PHPExcel_Style_Border::BORDER_THIN
					)
				)
				);
			$paginas->getStyle('A1:G1')->applyFromArray($estilo);

			for($i=0; $i<count($libro);$i++)
			{
				
				
				$paginas->setCellValue('A'.($i+2),$libro[$i]['isbn']);
				$paginas->setCellValue('b'.($i+2),$libro[$i]['libro']);
				$paginas->setCellValue('c'.($i+2),$libro[$i]['fecha']);
				$paginas->setCellValue('d'.($i+2),$libro[$i]['editorial']);
				$paginas->setCellValue('e'.($i+2),$libro[$i]['categoria']);
				$paginas->setCellValue('f'.($i+2),$libro[$i]['autor']);
				$paginas->setCellValue('g'.($i+2),$libro[$i]['pais_de_autor']);
				//bordes de las celdas
				$bordes=array
				(
					'borders'=>array
					(
						'allborders'=>array
						(
							'style'=>PHPExcel_Style_Border::BORDER_THIN
						)
					)
				);
				$paginas->getStyle('A'.($i+2),'G'.($i+2))->applyFromArray($bordes);
				$paginas->getStyle('B'.($i+2),'G'.($i+2))->applyFromArray($bordes);
				$paginas->getStyle('C'.($i+2),'G'.($i+2))->applyFromArray($bordes);
				$paginas->getStyle('D'.($i+2),'G'.($i+2))->applyFromArray($bordes);
				$paginas->getStyle('E'.($i+2),'G'.($i+2))->applyFromArray($bordes);
				$paginas->getStyle('F'.($i+2),'G'.($i+2))->applyFromArray($bordes);
				$paginas->getStyle('G'.($i+2),'G'.($i+2))->applyFromArray($bordes);
			}
			foreach(range('A','G')as $columna)
			{
				$paginas->getColumnDimension($columna)->setAutoSize(true);
			}

			$objwriter= PHPExcel_IOFactory::createwriter($excel,'Excel5');
			$objwriter->save('php://output');
	}
}
$generar= new Reportes();
$generar->hacer_reporte();*/
?>