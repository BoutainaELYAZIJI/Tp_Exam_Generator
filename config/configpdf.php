<?php 
require('page/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(46,12,$column_heading,1);
$pdf->Output();
?>