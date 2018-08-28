<?php 
require_once  '../../Modelo/reportes/info-error_reporte.php';
$error=new mostrar_error();
$a=$error->error_rep();
$b=$error->no_console();
require_once '../../Modelo/reportes/info_reporte.php';
require_once '../../Controlador/Excel/PHPExcel-1.8/Classes/PHPExcel.php';
class a_edit
{
	
	public function arreglo($consulta)
	{
		#objeto de la clase php excel 
		#apartir de las siguientes lineas inicia la generación del archivo como tal
		$objPHPExcel= new PHPExcel();

		#Propiedades del documento a continuación
		$objPHPExcel->getProperties()->setCreator("Libreria")
						->setLastModifiedBy("Admin")
						->setTitle("Office 2007 XLSX Test Document")
						->setSubject("Office 2007 XLSX Test Document")
						->setDescription("reporte")
						->setKeywords("office 2007 openxml php")
						->setCategory("reporte");

		#Titulos de las columnas del excel
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A1','codigo_postal')
					->setCellValue('B1','nombre_e');
					
		$i=2;
		while ($informe=$consulta->fetch_array(MYSQLI_ASSOC))
		{
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue("A$i",$informe['codigo_postal'])
						->setCellValue("B$i",$informe['nombre_e']);
						
		#bordes del cuerpo de la tabla				
			$bordes=array(
     				'borders' => array(
       							'allborders' => array(
          										'style' => PHPExcel_Style_Border::BORDER_THIN,
          										'color' => array('argb' => 'FF000000'),
        											)
      									),
   						 );

		#Aplicacion de bordes 
			$objPHPExcel->getActiveSheet()->getStyle('A'.($i),'B'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('B'.($i),'B'.($i))->applyFromArray($bordes);
			
		#Ajustando celda a contenido
			$objPHPExcel->getActiveSheet()->getStyle('A'.($i),'B'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('B'.($i),'B'.($i))->getAlignment()->setWrapText(true);
			$i++;		
		}

			#estilo de la tabla(fuente y bordes cabecera )
		 $estilo = array
 		(
   			#fuente
   			 'font'  => array
					(
       					'bold'  => true,
       					'size'  => 12,
       					'name'  => 'Colonna MT'
  					),
  			#bordes		
			'borders'=>array
					(
						'allborders'=>array
						(
							'style'=>PHPExcel_Style_Border::BORDER_THIN
						)
					)
		);
		#Aplicando el arreglo anterior
		$objPHPExcel->getActiveSheet()->getStyle('A1:G1')->applyFromArray($estilo);	
		#Ajuste de celda al texto 
		$objPHPExcel->getActiveSheet()->getStyle('A1:G1')->getAlignment()->setWrapText(true);
		
		#Ajuste de la dimension de celda
		foreach(range('A','B')as $columna)
		{
			$objPHPExcel->getActiveSheet()->getColumnDimension($columna)->setAutoSize(true);
		} 

		#Titulo del documento
		$objPHPExcel->getActiveSheet()->setTitle('Reporte');
		$objPHPExcel->setActiveSheetIndex(0);
		$error=new mostrar_error();
		$c=$error->headers();
	
		#Formato de descarga del documento y proceso de descarga en si
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
		exit;
	}
}
 ?>