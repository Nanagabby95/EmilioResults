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
$pdf->Cell(50,4,'ATTENDANCE',0,0,'L');
$pdf->Cell(50,4,'  ',0,0,'L');
$pdf->LN();
$pdf->Cell(50,4,'NEXT TERM BEGINS',0,0,'L');
$pdf->Cell(60,4,'JANUARY',1,1,'L');



$pdf->LN(8);
// table 1


$pdf->SetFont('Arial','B',7);
$pdf->Cell(25,10,' ',0);
 $pdf->Cell(10,5,'1st CA','TL', 0,0);
//$pdf->Cell(10, 10, 'Cell content', 'TRL', 0, 'L', false, '', 'TBL');

$pdf->Cell(10,5,'Assign-','T',0);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(8,5,'EXAM','T',0);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(17,5,"TOTAL",'TLR',0);
$pdf->Cell(10,10,' ','TLR',0);
$pdf->SetFont('Arial','b',7);
$pdf->Cell(21,10,"Subject",'TLR',0);
$pdf->Cell(26,5,'Class','TLR',0);
$pdf->Cell(25,5,'Class','TLR');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,10,'SIGN-','TLR',0,1);


// $pdf->SetFont('Arial','B',7);
// $pdf->Cell(25,6,' ',0);
// $pdf->SetFont('Arial','B',7);
// $pdf->Cell(10,6,' Score ','BL',0,0);
// $pdf->Cell(10,6,'ment','B',0);
// $pdf->Cell(8,6,'Score','B',0);
// $pdf->Cell(17,6,'SCORE','LB',0);
// $pdf->Cell(10,6,' ','LR',0);
// $pdf->Cell(21,6,'Position','LR',0);
// $pdf->Cell(26,6,' Highest','LR',0);
// $pdf->Cell(25,6,' Lowest','LR',0);
// // $pdf->Cell(10,6,' ',1);
// $pdf->SetFont('Arial','B',9);
// $pdf->Cell(13,6,'ATURE ','LR',0);
 $pdf->Ln(4);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(25,6,' ',0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(10,6,' Score ','L',0,0);
$pdf->Cell(10,6,'ment',' ',0);
$pdf->Cell(8,6,'Score',' ',0);
$pdf->Cell(17,6,'SCORE','L',0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(10,6,'Grade','LR',0);
$pdf->Cell(21,6,' ','LR',0);
$pdf->Cell(26,6,'Highest ','LR',0);
$pdf->Cell(25,6,'Score','LR',0);
// $pdf->Cell(10,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,8,'ATURE ','LR',0);
$pdf->Ln();

$pdf->SetFont('Arial','B',7);
$pdf->Cell(25,6,' ',0);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(10,6,' 10 ','L',0,0);
$pdf->Cell(10,6,'10',' ',0);
$pdf->Cell(8,6,'20',' ',0);
$pdf->Cell(17,4,'SCORE','LB',0);
$pdf->Cell(10,6,' ','LR',0);

$pdf->Cell(21,0,'Position','LR',0);
$pdf->Cell(26,5,' Score','LR',0);
$pdf->Cell(25,4,' Lowest','LR',0);
// $pdf->Cell(1,4,'Score ',0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,4,'','LR',0);
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'SUBJECT',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
$pdf->Cell(17,6,'40',1);
$pdf->Cell(10,6,' ',1);
$pdf->Cell(21,6,' ',1);
$pdf->Cell(26,6,' ',1);
$pdf->Cell(25,6,' ',1);
// $pdf->Cell(10,6,' ',1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(13,6,' ',1);
$pdf->Ln();


$pdf->SetFont('Arial','B',8);
$pdf->Cell(25,6,'SUBJECT',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(10,6,'10',1);
$pdf->Cell(8,6,'20',1);
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
$pdf->Cell(100,6,'OVERALL TOTAL SCORE OUT OF 150','TL',0);
$pdf->SetFont('Arial','b');
$pdf->Cell(20,6,'91','TR',24,0);
$pdf->Ln(1);
$pdf->SetFont('Arial','b',10);
$pdf->Cell(100,6,'OVERALL TOTAL SCORE OUT OF 150','L',0,'L');
$pdf->SetFont('Arial','b');
$pdf->Cell(20,6,'91','R',24,0);
$pdf->Ln(1);
$pdf->SetFont('Arial','b',10);
$pdf->Cell(100,6,'OVERALL TOTAL SCORE OUT OF 150','L',0,'L');
$pdf->SetFont('Arial','b');
$pdf->Cell(20,6,'91','R',24,0);
$pdf->Ln(1);
$pdf->SetFont('Arial','b',10);
$pdf->Cell(100,6,'OVERALL TOTAL SCORE OUT OF 150','L',0,'L');
$pdf->SetFont('Arial','b');
$pdf->Cell(20,6,'91','R',24,0);
$pdf->Ln(1);
$pdf->SetFont('Arial','b',10);
$pdf->Cell(100,6,'OVERALL TOTAL SCORE OUT OF 150','BL',0,'L');
$pdf->SetFont('Arial','b');
$pdf->Cell(20,6,'91','BR',24,0);


$pdf->Ln(6);




$pdf->Cell(50,6,"Form Teacher's Remark:",0,0);
$pdf->SetFont('Arial','b');
$pdf->Cell(50,6,'Emmanuella has to Improve','i',0,0);
$pdf->Ln();
$pdf->Cell(50,6,"Form Master's Remark:",0,0);
$pdf->SetFont('Arial','b');
$pdf->Cell(50,6,'Emmanuella has to Improve','i',0,0);
$pdf->Ln(8);

$pdf->Cell(70,6,'.........',24,0 ,'L');
$pdf->Cell(70,6,'.........',24,0 ,'L');
$pdf->Cell(70,6,'.........',24,0, 'L');
$pdf->Output();
?>


