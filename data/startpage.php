<?php
// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new TCPDF ('L', 'mm', array('201','150'), true, 'UTF-8', false);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetMargins(0, 3, 0);


// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 6);

// add a page
$pdf->AddPage();


// set font
$pdf->SetFont('helvetica', '', 12);
 ?>