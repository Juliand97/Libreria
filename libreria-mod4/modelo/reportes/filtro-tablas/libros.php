<?php 
include 'info-error_reporte.php';
$error=new mostrar_error();
$a=$error->error_rep();
$b=$error->no_console();

require_once '../../Controlador/Excel/PHPExcel-1.8/Classes/PHPExcel.php';
class a_libro
{
	
	public function arreglo($consulta)
	{
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
					->setCellValue('A1','Isbn')
					->setCellValue('B1','Libro')
					->setCellValue('C1','Fecha')
					->setCellValue('D1','Editorial')
					->setCellValue('E1','Categoria')
					->setCellValue('F1','Autor')
					->setCellValue('G1','Pais de autor')
					->setCellValue('H1','Cantidad')
					->setCellValue('I1','Compra');

		#$objPHPExcel= new PHPExcel();
		$i=2;
		while ($informe=$consulta->fetch_array(MYSQLI_ASSOC))
		{
					$objPHPExcel->setActiveSheetIndex(0)
						->setCellValue("A$i",$informe['isbn'])
						->setCellValue("B$i",$informe['libro'])
						->setCellValue("C$i",$informe['fecha'])
						->setCellValue("D$i",$informe['editorial'])
						->setCellValue("E$i",$informe['categoria'])
						->setCellValue("F$i",$informe['autor'])
						->setCellValue("G$i",$informe['pais_de_autor'])
						->setCellValue("H$i",$informe['cantidad'])
						->setCellValue("I$i",$informe['compra']);



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
			$objPHPExcel->getActiveSheet()->getStyle('A'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('B'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('C'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('D'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('E'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('F'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('G'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('H'.($i),'I'.($i))->applyFromArray($bordes);
			$objPHPExcel->getActiveSheet()->getStyle('I'.($i),'I'.($i))->applyFromArray($bordes);


		#Ajustando celda a contenido
			$objPHPExcel->getActiveSheet()->getStyle('A'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('B'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('C'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('D'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('E'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('F'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('G'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('H'.($i),'I'.($i))->getAlignment()->setWrapText(true);
			$objPHPExcel->getActiveSheet()->getStyle('I'.($i),'I'.($i))->getAlignment()->setWrapText(true);
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
		$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->applyFromArray($estilo);	
		#Ajuste de celda al texto 
		$objPHPExcel->getActiveSheet()->getStyle('A1:I1')->getAlignment()->setWrapText(true);
		
		#Ajuste de la dimension de celda
		foreach(range('A','I')as $columna)
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