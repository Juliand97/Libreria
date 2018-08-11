<?php
	
	//header('Content-Type: application/vdn.ms-excel');
	//header('Content-Disposition: attachment; filename=Reporte libreria.xls')
	
	
	
	
	
	
	
	
	
	
	
	
	include ('Classes/PHPExcel.php');
	require ('db.php');
	
	$sql = "SELECT isbn,libro,fecha,editorial,categoria,autor,pais_de_autor FROM libros";
	
	$resultado = $con->query($sql);
	if($resultado){echo "a";}else{echo"b";}
	$fila = 2;
	
	$Excel = new PHPExcel();
	$Excel->getProperties()->setCreator("Libreria")->setDescription("Reporte de Libros");
	
	$Excel->setActiveSheetIndex(0);
	$Excel->getActiveSheet()->setTitle("Libros");
	
	$Excel->getActiveSheet()->setCellValue('A1', 'Isbn');
	$Excel->getActiveSheet()->setCellValue('B1', 'Libro');
	$Excel->getActiveSheet()->setCellValue('C1', 'Fecha');
	$Excel->getActiveSheet()->setCellValue('D1', 'Editorial');
	$Excel->getActiveSheet()->setCellValue('E1', 'Categoria');
	$Excel->getActiveSheet()->setCellValue('F1', 'Autor');
	$Excel->getActiveSheet()->setCellValue('G1', 'Pais del autor');
	
	while($row = $resultado->fetch_assoc())
	{
		
		$Excel->getActiveSheet()->setCellValue('A'.$fila, $row['isbn']);
		$Excel->getActiveSheet()->setCellValue('B'.$fila, $row['libro']);
		$Excel->getActiveSheet()->setCellValue('C'.$fila, $row['fecha']);
		$Excel->getActiveSheet()->setCellValue('D'.$fila, $row['editorial']);
		$Excel->getActiveSheet()->setCellValue('E'.$fila, $row['categoria']);
		$Excel->getActiveSheet()->setCellValue('F'.$fila, $row['autor']);
		$Excel->getActiveSheet()->setCellValue('G'.$fila, $row['pais_de_autor']);
		
		
		$fila++;
		
	}
	
	header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
	header('Content-Disposition: attachment;filename="Reporte libros.xls"');
	
	
	$Descarga = new PHPExcel_Writer_Excel2007($Excel);
	$Descarga->save('php://output');
	
?>