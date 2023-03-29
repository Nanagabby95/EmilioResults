<?php
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B', 20);
$pdf->Cell(0,5,'EMILIO PIAZZA MEMORIAL COLLEGE',0,1,'C');
$pdf->SetFont('Arial','i',15);
$pdf->LN(1);
$pdf->Cell(0,5,'48 Obi-Wali Road',0,1,'C');
$pdf->LN(1);
$pdf->Cell(0,5,'Rumuigbo, PortHarcourt',0,1,'C');
$pdf->LN(1);
$pdf->Cell(0,5,'Web:Email',0,1,'C');

$pdf->SetFont('Arial','B', 20);
$pdf->SetTextColor(197,197,236);
$pdf->LN(1);
$pdf->Cell(0,5,'RIVERS STATE JUNIOR SCHOOL CERTIFICATE EXAM',0,1,'C');


$pdf->SetFont('Arial','B', 20);
$pdf->SetTextColor(197,197,236);
$pdf->LN(1);
$pdf->Cell(0,5,'(MOCK 02)',0,1,'C');

$pdf->LN();
$pdf->SetFont('Arial','B', 20);
$pdf->SetTextColor(000);
$pdf->Cell(150,5,'Reg No.',0,0,'R');
$pdf->SetFont('Arial','B', 16);

$pdf->Cell(35,5,'EPMC/21.028',1,1,'C');
$pdf->LN(5);
$pdf->Cell(70,5,'CANDIDATE NAME',0,0,'R');
$pdf->Cell(62,5,'DIKE, GLORY IHEONU',1,0,'C');
$pdf->Ln();

$pdf->LN(2);
$pdf->Cell(70,5,'SESSION',0,0,'R');
$pdf->Cell(62,5,'2022/2023',1,0,'C');
$pdf->Ln();

$pdf->LN(2);
$pdf->Cell(70,5,'SEX',0,0,'R');
$pdf->Cell(62,5,'F',1,0,'C');
$pdf->Ln();

$pdf->LN(2);
$pdf->Cell(70,5,'CLASS',0,0,'R');
$pdf->Cell(62,5,'JSS3',1,0,'C');


$pdf->LN(10);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(80,10,'No. of Subjects Taken',0, );
$pdf->Cell(15,5,'15',1);
$pdf->Ln();

$pdf->Ln(2);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(80,10,'No. of Subjects Passed',0, );
$pdf->Cell(15,5,'15',1);
$pdf->Ln();

$pdf->Ln(2);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(80,10,'Number of Subjects Failed',0, );
$pdf->Cell(15,5,'15',1);
$pdf->Ln();


$pdf->Ln(2);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(80,10,'TOTAL CORE SUBJECTS PASSED',0, );
$pdf->Cell(15,5,'15',1);
$pdf->Ln(6);


// table 1
$pdf->Ln();
$pdf->SetFont('Arial','B',11);
$pdf->Cell(10,6,'S/No',1);
$pdf->Cell(40,6,'SUBJECT',1);
$pdf->Cell(20,6,'SCORE',1);
$pdf->Cell(20,6,'GRADE',1);
$pdf->Ln();

// Add data to the table
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,6,'1',1);
$pdf->Cell(40,6,'English',1);
$pdf->Cell(20,6,'80',1);
$pdf->Cell(20,6,'A',1);
$pdf->Ln();

$pdf->Cell(10,6,'2',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'3',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'4',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'5',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'6',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'7',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'8',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();

$pdf->Cell(10,6,'9',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'10',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();

$pdf->Cell(10,6,'11',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'12',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();

$pdf->Cell(10,6,'13',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'14',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();

$pdf->Cell(10,6,'15',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln();
$pdf->Cell(10,6,'16',1);
$pdf->Cell(40,6,'Mathematics',1);
$pdf->Cell(20,6,'70',1);
$pdf->Cell(20,6,'B',1);
$pdf->Ln(50);
// table 2
$pdf->SetXY(120,160);
$pdf->SetFont('Arial','B',11,);
$pdf->Cell(70,5,'INTERPRETATION OF RESULTS',1);
$pdf->Ln();

$pdf->SetXY(120,165);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,5,'Agregate',1);
$pdf->Cell(30,5,'Result',1);
$pdf->Ln();

$pdf->SetXY(120,170);
$pdf->Cell(40,5,'Agregate',1);
$pdf->Cell(30,5,'Result',1);
$pdf->Ln();

$pdf->SetXY(120,175);
$pdf->Cell(40,5,'Agregate',1);
$pdf->Cell(30,5,'Result',1);
$pdf->Ln();

$pdf->SetXY(120,180);
$pdf->Cell(40,5,'Agregate',1);
$pdf->Cell(30,5,'Result',1);
$pdf->Ln();

$pdf->SetXY(120,185);
$pdf->Cell(40,5,'Agregate',1);
$pdf->Cell(30,5,'Result',1);
$pdf->Ln();

$pdf->SetXY(120,190);
$pdf->Cell(40,5,'Agregate',1);
$pdf->Cell(30,5,'Result',1);
$pdf->Ln();

$pdf->SetXY(120,195);
$pdf->Cell(40,5,'Agregate',1);
$pdf->Cell(30,5,'Result',1);
$pdf->Ln();

$pdf->SetXY(120,200);
$pdf->Cell(40,5,'Agregate',1);
$pdf->Cell(30,5,'Result',1);
$pdf->Ln(40
);


$pdf->Cell(40,6,'OVERALL RESULT',0);
$pdf->SetFont('Arial','b');
$pdf->Cell(40,6,'PASS',24);
$pdf->Ln(6);
$pdf->Cell(40,6,'Date Issued',24);
$pdf->Ln(10);

$pdf->Cell(40,6,'PRINCIPAL SIGNATURE.............................................',0,1);
$pdf->Output();
?>


