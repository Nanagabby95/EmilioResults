
<?php
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);


$pdf->Cell(55,5,' Reference Code ', 0, 0);
$pdf->Cell(58,5,'  ', 0, 0);
$pdf->Cell(25,5,'Date ', 0, 0);
$pdf->Cell(52,5,' Time ', 0, 1);

$pdf->Cell(55,5,' Amount', 0, 0);
$pdf->Cell(58,5,'  ', 0, 0);
$pdf->Cell(25,5,'Channel ', 0, 0);
$pdf->Cell(52,5,' Web', 0, 1);




$pdf->Cell(55,5,' Status', 0, 0);
$pdf->Cell(58,5,' Not Paid', 0, 1);

$pdf->Line(10,30,200,30);
$pdf->Cell(55,5,'Product ID', 0, 0);
$pdf->Cell(58,5,'  ', 0, 1);


$pdf->Cell(55,5,'Tax Amount', 0, 0);
$pdf->Cell(58,5,'   ', 0, 1);

$pdf->Cell(55,5,'Product Service Charge', 0, 0);
$pdf->Cell(58,5,'  ', 0, 1);

$pdf->Cell(55,5,'Product Delivery Charge', 0, 0);
$pdf->Cell(58,5,' 0 ', 0, 1);

$pdf->Line(10, 60, 200, 60);

$pdf->LN(10);
$pdf->Cell(55,5,'Paid by', 0, 0);
$pdf->Cell(58,5,'.................', 0, 1);


$pdf->Line(155, 75, 195, 75);
$pdf->LN(5);
$pdf->Cell(140,5,'.........', 0, 0);
$pdf->Cell(50,5,'Signature', 0, 1, 'C');
$pdf->LN(10);

$pdf->Output();


?>
