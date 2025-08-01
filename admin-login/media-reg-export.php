<?php
//$con = new mysqli("localhost", "root", "", "insuretek");
include('../dbcon.php');
include('Classes/PHPExcel.php');
include('Classes/PHPExcel/IOFactory.php');


$sql = "select * from media_reg_2025 where status=1 order by id desc";
$res = mysqli_query($con, $sql);
//set the desired name of the excel file
$fileName = 'MasTech 2025 - Media-Registrations';
$objPHPExcel = new PHPExcel();

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
$objSheet = $objPHPExcel->getActiveSheet();
$last_line = $objSheet->getHighestRow() + 1;
$last_id = $objSheet->getCellByColumnAndRow(0, $last_line)->getCalculatedValue();



$objPHPExcel->getActiveSheet()->mergeCells('A1:F3');
$objPHPExcel->getActiveSheet()->mergeCells('A4:A5');
$objPHPExcel->getActiveSheet()->mergeCells('B4:B5');
$objPHPExcel->getActiveSheet()->mergeCells('C4:C5');
$objPHPExcel->getActiveSheet()->mergeCells('D4:D5');
$objPHPExcel->getActiveSheet()->mergeCells('E4:E5');
$objPHPExcel->getActiveSheet()->mergeCells('F4:F5');
// $objPHPExcel->getActiveSheet()->mergeCells('G4:G5');
// $objPHPExcel->getActiveSheet()->mergeCells('H4:H5');







//$objPHPExcel->getActiveSheet()
//    ->setCellValue('D3', 546723519);
$objPHPExcel->getActiveSheet()
    ->getStyle('D3:D500')
    ->getNumberFormat()
    ->setFormatCode('0000000000');

$objPHPExcel->getActiveSheet()
    ->getStyle('H3:H500')
    ->getNumberFormat()
    ->setFormatCode('0000000000');

$objPHPExcel->getActiveSheet()
    ->setCellValue(
        'D1',
        '0054672351',
        PHPExcel_Cell_DataType::TYPE_STRING
    );


$objPHPExcel->getActiveSheet()->getStyle("A1:F3")->applyFromArray(
    $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
        ),
        'font' => array(
            'bold' => true,
            'color' => array('rgb' => '4caf50'),
            'size' => 12,
            'name' => 'Verdana',
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN

            )
        ),
    )

);


$objPHPExcel->getActiveSheet()->getStyle("A4:H4")->applyFromArray(
    $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertrical' => PHPExcel_Style_Alignment::VERTICAL_BOTTOM,
        ),

    )
);

$objPHPExcel->getActiveSheet()->getDefaultStyle()->applyFromArray(
    $style = array(

        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THICK

            )
        )
    )
);

$objPHPExcel->getActiveSheet()->getStyle("A4:F5")->applyFromArray(
    $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertrical' => PHPExcel_Style_Alignment::VERTICAL_BOTTOM,
        ),
        'font' => array(
            'bold' => true,
            'size' => 10,
            'name' => 'Verdana',
        ),
        'borders' => array(
            'allborders' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN

            )
        ),

    )
);

$cellStyle = array(
    'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
    ),
    'borders' => array(
        'allborders' => array(
            'style' => PHPExcel_Style_Border::BORDER_THIN,
        ),
    ),
);




$objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A1', 'List Of MasTech 2025 - Media Registration')
    ->setCellValue('A4', 'Sl.No')
    ->setCellValue('B4', 'Name of Media')
    ->setCellValue('C4', 'Contact Number')

    ->setCellValue('D4', 'Location')
    ->setCellValue('E4', 'Website')
    ->setCellValue('F4', 'Registration Date');

//   ->setCellValue('J4', 'Registration Date');

$row = $last_line + 4;
$col = 0;
$i = 1;

while ($datas = mysqli_fetch_array($res)) {

    $name = $datas['name'];
    // $datetime = new DateTime($data->v_dateof_visit);
    $objSheet->setCellValueByColumnAndRow($col++, $row, $i);
    $objSheet->setCellValueByColumnAndRow($col++, $row, $name);

    $objSheet->setCellValueByColumnAndRow($col++, $row, $datas['contact']);
    $objSheet->setCellValueByColumnAndRow($col++, $row, $datas['location']);
    $objSheet->setCellValueByColumnAndRow($col++, $row, $datas['website']);
    $objPHPExcel->getActiveSheet()->getStyle('E' . $row)->getAlignment()->setWrapText(true);

    $objSheet->setCellValueByColumnAndRow($col++, $row, date('d-m-Y', strtotime($datas['added_date'])));
    // $objSheet->setCellValueByColumnAndRow($col++, $row, $datas['regdate']);
    $objPHPExcel->getActiveSheet()->getStyle("A$row:F$row")->applyFromArray($cellStyle);





    $col = 0;
    $row++;
    $i++;
}

$objPHPExcel->getActiveSheet()->getStyle('D1')->getNumberFormat()->setFormatCode('#,0');
$objPHPExcel->getActiveSheet()->getColumnDimension('A4')->setWidth(100);
$objPHPExcel->getActiveSheet()->getColumnDimension('B4')->setWidth(100);
$objPHPExcel->getActiveSheet()->getColumnDimension('C4')->setWidth(100);
$objPHPExcel->getActiveSheet()->getColumnDimension('D4')->setWidth(100);
for ($col = 'A'; $col !== 'S'; $col++) {
    $objPHPExcel->getActiveSheet()
        ->getColumnDimension($col);
}
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(35);

$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(25);

/* for($col = 'F'; $col !== 'G'; $col++)
 {
     $objPHPExcel->getActiveSheet()
         ->getColumnDimension($col)
        // ->setAutoSize(false)
      ;
 }*/


for ($col = 'K'; $col !== 'S'; $col++) {
    $objPHPExcel->getActiveSheet()
        ->getColumnDimension($col)
        ->setAutoSize(true)
    ;
}


//    for($col = 'A'; $col !== 'S'; $col++)
//    {
//        $objPHPExcel->getActiveSheet()
//            ->getColumnDimension($col)
//            ->setAutoSize(true)
//         ;
//    }





header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $fileName . '.xlsx"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
?>