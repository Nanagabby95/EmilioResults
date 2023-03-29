<?php
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B', 20);
$pdf->Cell(0,5,'EMILIO PIAZZA MEMORIAL COLLEGE',0,1,'C');
$pdf->SetFont('Arial','i',10);
$pdf->LN(2);
$pdf->Cell(0,5,'48 Obi-Wali Road',0,1,'C');
$pdf->LN(2);
$pdf->Cell(0,5,'Rumuigbo, PortHarcourt',0,1,'C');
$pdf->LN(2);
$pdf->Cell(0,5,'Web:Email',0,1,'C');

$pdf->SetFont('Arial','B', 10);
$pdf->SetTextColor(000);
$pdf->LN(5);
$pdf->Cell(0,5,'STUDENTS EDUCATIONAL CONTINUOUS ASSESSMENT RECORDS',0,1,'C');
$pdf->Cell(0,5,'FOR JUNIOR SECONDARY SCHOOL 2022/2023 SESSION',0,1,'C');
$pdf->Cell(0,5,'1st Term REPORT',0,1,'C');


$pdf->LN(5);
$pdf->Cell(50,4,'NAME',0,0,'L');
$pdf->Cell(60,4,'DIKE, GLORY IHEONU',1,0,'L');
$pdf->LN();
$pdf->Cell(50,4,'REG No.',0,0,'L');
$pdf->Cell(60,4,'EPMC/23/067',1,1,'L');
$pdf->Cell(50,4,'CLASS',0,0,'L');
$pdf->Cell(60,4,'JSS 1',1,1,'L');
$pdf->LN();
$pdf->Cell(50,4,'NEXT TERM BEGINS',0,0,'L');
$pdf->Cell(60,4,'JANUARY',1,1,'L');



$pdf->LN(8);
// table 1

$pdf->SetFont('Arial','B',7);
$pdf->Cell(25,10,' ',0);
$pdf->Cell(10,10,'1st CA',1);
$pdf->Cell(10,10,'Assign-',1);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(8,10,'EXAM',1);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(17,10,'TOTAL SCORE',1);
$pdf->Cell(10,10,'GRADE',1);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(21,10,'Subject Position',1);
$pdf->Cell(26,10,'Class Highest Score',1);
$pdf->Cell(25,10,'Class Lowest Score',1);
$pdf->Cell(13,10,'Signature',1);
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'SUBJECT',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->Ln();


$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'SUBJECT',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

// Add data to the table

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();


$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();





$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();


$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,'  ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();




$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();


$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6,' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'MATHEMATICS',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(8,6, ' ',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->LN(1);

// table 2
$pdf->SetXY(180,110);
$pdf->SetFont('Arial','B',6.6);
$pdf->Cell(22,5,'JS GRADE POINTS',1);
$pdf->Ln();

$pdf->SetFont('Arial','B',7);
$pdf->SetXY(180,115);
$pdf->Cell(15,5,'FFFFF',1);
$pdf->Cell(7,5,'C',1);
$pdf->Ln();

$pdf->SetXY(180,120);
$pdf->Cell(15,5,'FFFFF',1);
$pdf->Cell(7,5,'C',1);
$pdf->Ln();

$pdf->SetXY(180,125);
$pdf->Cell(15,5,'FFFFF',1);
$pdf->Cell(7,5,'C',1);
$pdf->Ln();

$pdf->SetXY(180,130);
$pdf->Cell(15,5,'FFFFF',1);
$pdf->Cell(7,5,'C',1);
$pdf->Ln();

$pdf->SetXY(180,135);
$pdf->Cell(15,5,'FFFFF',1);
$pdf->Cell(7,5,'C',1);
$pdf->Ln();

$pdf->SetXY(180,140);
$pdf->Cell(15,5,'FFFFF',1);
$pdf->Cell(7,5,'C',1);
$pdf->Ln();

$pdf->SetXY(180,145);
$pdf->Cell(15,5,'FFFFF',1);
$pdf->Cell(7,5,'C',1);
$pdf->Ln();

$pdf->SetXY(180,150);
$pdf->Cell(15,5,'FFFFF',1);
$pdf->Cell(7,5,'C',1);
$pdf->Ln(60);

$pdf->SetFont('Arial','b',10);
$pdf->Cell(100,6,'OVERALL TOTAL SCORE OUT OF 150',1);
$pdf->SetFont('Arial','b');
$pdf->Cell(100,6,'91',24,0);
$pdf->Cell(100,6,'AVERAGE SCORE',0);
$pdf->SetFont('Arial','b');
$pdf->Cell(40,6,'91',24,0);
$pdf->Ln();


$pdf->Cell(100,6,'POSITION',1);
$pdf->SetFont('Arial','b');
$pdf->Cell(100,6,'91',24,1);

$pdf->Cell(100,6,'No. of Students Participated In Exam',1);
$pdf->SetFont('Arial','b');
$pdf->Cell(100,6,'91',24,1);


$pdf->Cell(100,6,'No. of Students In Class',1);
$pdf->SetFont('Arial','b');
$pdf->Cell(100,6,'91',24,1);
$pdf->Ln(3);




$pdf->Cell(50,6,'Form Teachers Remark:',0,0);
$pdf->SetFont('Arial','b');
$pdf->Cell(50,6,'Emmanuella has to Improve',0,1);
$pdf->Ln(1);
$pdf->Cell(50,6,'Form Masters Remark:',0,0);
$pdf->SetFont('Arial','b');
$pdf->Cell(50,6,'Emmanuella has to Improve',0,1);
$pdf->Ln(3);

$pdf->Cell(80,6,'.........',24,0 ,'L');
$pdf->Cell(50,6,'.........',24,0 ,'L');
$pdf->Cell(50,6,'.........',24,0, 'L');
$pdf->Output();
?>


