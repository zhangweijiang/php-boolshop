<?php

	include './PHPExcel-1.8/Classes/PHPExcel.php';
	$excel = new PHPExcel();
	$objDrawing = new PHPExcel_Worksheet_Drawing();

	/*设置文本对齐方式*/
	$excel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	$excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
	$objActSheet = $excel->getActiveSheet();

	$letter = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N');
	/*设置表头数据*/
	$tableheader = array('姓名', '性别', '年龄', '班级', '头像');
	/*填充表格表头*/
	for($i = 0;$i < count($tableheader);$i++) {
		$excel->getActiveSheet()->setCellValue("$letter[$i]1","$tableheader[$i]");
	}

	/*设置表格数据*/
	$data = array(
		array('小王', '男', '20', 'CS12', 'test.jpg','u'),
		array('小李', '女', '21', 'CS12', 'test.jpg','g'),
		array('小周', '男', '22', 'CS12', 'test1.jpg','g'),
		array('小赵', '女', '23', 'CS12', 'test.jpg','v'),
		array('小张', '男', '24', 'CS12', 'test.jpg','d')
	);

	/*填充表格内容*/
	for ($i = 0;$i < count($data);$i++) {
		$j = $i + 2;
		/*设置表格宽度*/
		$objActSheet->getColumnDimension("$letter[$i]")->setWidth(20);
		/*设置表格高度*/
		$excel->getActiveSheet()->getRowDimension($j)->setRowHeight(100);
		/*向每行单元格插入数据*/
		for ($row = 0;$row < count($data[$i]);$row++) {
			if ($row == (count($data[$i]) -2 )) {
				/*实例化插入图片类*/
				$objDrawing = new PHPExcel_Worksheet_Drawing();
				/*设置图片路径*/
				$objDrawing->setPath('./view/'.$data[$i][$row]);
				/*设置图片高度*/
				$objDrawing->setHeight(100);
				/*设置图片要插入的单元格*/
				$objDrawing->setCoordinates("$letter[$row]$j");
				/*设置图片所在单元格的格式*/
				$objDrawing->setOffsetX(20);
				$objDrawing->setOffsetY(16);
				$objDrawing->setRotation(20);
				$objDrawing->getShadow()->setVisible(true);
				$objDrawing->getShadow()->setDirection(50);
				$objDrawing->setWorksheet($excel->getActiveSheet());

			}else{
				$excel->getActiveSheet()->setCellValue("$letter[$row]$j",$data[$i][$row]);
			}

		}
	}

	$write = new PHPExcel_Writer_Excel5($excel);
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
	header("Content-Type:application/force-download");
	header("Content-Type:application/vnd.ms-execl");
	header("Content-Type:application/octet-stream");
	header("Content-Type:application/download");;
	header('Content-Disposition:attachment;filename="测试文件.xls"');
	header("Content-Transfer-Encoding:binary");
	$write->save('php://output');