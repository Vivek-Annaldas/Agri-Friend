<?php
require_once('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->SetTitle('PDF Document');
$pdf->AddPage();

$pdf->SetFont('Arial', '', 12);

$pdf->Cell(40, 10, 'Welcome to PHP');

$pdf->Cell(60, 10, 'Welcome to PDF');

$pdf->Rect(10, 30, 100, 50, 'D');

$pdf->Output('pdffff.pdf','I');
?>
