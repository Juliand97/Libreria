<?php 
require_once '../../Controlador/Excel/PHPExcel-1.8/Classes/PHPExcel.php';
require_once '../../Modelo/reportes/info-error_reporte.php';
	$error=new mostrar_error();
		$c=$error->headers();
class a_autor
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
					->setCellValue('A1','Num_registro')
					->setCellValue('B1','Nombre autor')
					->setCellValue('C1','Apellido autor')
					->setCellValue('D1','Nacionalidad')
					->setCellValue('E1','Nacimiento')
					->setCellValue('F1','Estado de actividad')
					->setCellValue('G1','Cant. obras');
		$i=2;
		while ($informe=$consulta->fetch_array(MYSQLI_ASSOC))
		{
			$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue("A$i",$informe['no_registro'])
						->setCellValue("B$i",$informe['nombrea'])
						->setCellValue("C$i",$informe['apellidoa'])
						->setCellValue("D$i",$informe['nac'])
						->setCellValue("E$i",$informe['fechan'])
						->setCellValue("F$i",$informe['estadoa'])
						->setCellValue("G$i",$informe['obras']);


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
			$objPHPExcel->getActiveSheet()->getStyle('A'.($i),'G'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('B'.($i),'G'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('C'.($i),'G'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('D'.($i),'G'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('E'.($i),'G'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('F'.($i),'G'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('G'.($i),'G'.($i))->applyFromArray($bordes);
			/*$objPHPExcel->getActiveSheet()->getStyle('H'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('I'.($i),'I'.($i))->applyFromArray($bordes);*/


		#Ajustando celda a contenido
			$objPHPExcel->getActiveSheet()->getStyle('A'.($i),'G'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('B'.($i),'G'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('C'.($i),'G'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('D'.($i),'G'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('E'.($i),'G'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('F'.($i),'G'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('G'.($i),'G'.($i))->getAlignment()->setWrapText(true);
			/*$objPHPExcel->getActiveSheet()->getStyle('H'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('I'.($i),'I'.($i))->getAlignment()->setWrapText(true);*/
			#$objPHPExcel->getActiveSheet()->getStyle('A'.($i),'I'.($i))->getAlignment()->setWrapText(true);

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
		foreach(range('A','G')as $columna)
		{
			$objPHPExcel->getActiveSheet()->getColumnDimension($columna)->setAutoSize(true);
		} 


		#Titulo del documento
		$objPHPExcel->getActiveSheet()->setTitle('Reporte');
		$objPHPExcel->setActiveSheetIndex(0);
	
	
		#Formato de descarga del documento y proceso de descarga en si
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');


		exit;

	}
}
 ?>