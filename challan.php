<?php 
session_start();
$reg_id=$_SESSION['reg_id'];
require('tcpdf/tcpdf.php'); 
include 'db_connect.php';


class PDF extends TCPDF {
 
function Header() {
    $this->SetFont('Times','',18);
    $this->SetY(0.25);
    $this->Cell(0, .20, "University Of Kalyani", '', 2, "C");
    //reset Y
   //$this->SetY(1);
}
 
function Footer() {
//This is the footer; it's repeated on each page.
//enter filename: phpjabber logo, x position: (page width/2)-half the picture size,
//y position: rough estimate, width, height, filetype, link: click it!
  // $this->Image("img/logo.jpg",1 , 9.8, 3, 1, "JPG", "");
}
 
}

$sql=mysql_query("select * from applicant where reg_id='$reg_id'");
$row = mysql_fetch_array($sql);
extract($row);
 
//class instantiation
$pdf=new PDF("P","in","Letter");
 
$pdf->SetMargins(1,1,1);
 
$pdf->AddPage();
$pdf->SetFont('Times','',12);

 
  
$pdf->SetFillColor(240, 100, 100);
$pdf->SetFont('Times','BU',15);
 
 //Cell(float w[,float h[,string txt[,mixed border[,
//int ln[,string align[,boolean fill[,mixed link]]]]]]])
$pdf->Cell(0, .40, "Student's Copy", 1, 2, "C");
$pdf->SetFont('Times','',12);
//MultiCell(float w, float h, string txt [, mixed border [, string align [, boolean fill]]])
$pdf->MultiCell(0, 0.33, "   Challan Number : ".$reg_id, 'LR', "L");
$pdf->MultiCell(0, 0.33, "   Applicant's Name : ".$fname."                   Challan Date :             ", '1', "L");
$pdf->MultiCell(0, 0.35, "  Application ID : ".$reg_id."                        Applied For : M.Tech Part I Admission Test", 1, "C");
$pdf->MultiCell(0, 0.30, "    Payble At : State Bank Of India                    Acct No: SBI000000000000000" , 1, "L");
$pdf->MultiCell(0, 0.50, "    Application Fees : Rs. 500 + 10 (Bank Charge)                IFSC Code: SBI000000 " , 1, "L");

$pdf->MultiCell(0, 0.30, "Signature of the student ", 1, "R");
$pdf->MultiCell(0, 0.30, "", 0, "R");

$pdf->Cell(0, .40, "University's Copy", 1, 2, "C");
$pdf->SetFont('Times','',12);
//MultiCell(float w, float h, string txt [, mixed border [, string align [, boolean fill]]])
$pdf->MultiCell(0, 0.20, "  University Of Kalyani", 1, "C");
$pdf->MultiCell(0, 0.33, "   Challan Number : ".$reg_id, 'LR', "L");
$pdf->MultiCell(0, 0.33, "   Applicant's Name : ".$fname."                   Challan Date :             ", '1', "L");
$pdf->MultiCell(0, 0.35, "  Application ID : ".$reg_id."                        Applied For : M.Tech Part I Admission Test", 1, "C");
$pdf->MultiCell(0, 0.30, "    Payble At : State Bank Of India                    Acct No: SBI000000000000000" , 1, "L");
$pdf->MultiCell(0, 0.50, "    Application Fees : Rs. 500 + 10 (Bank Charge)                IFSC Code: SBI000000 " , 1, "L");

$pdf->MultiCell(0, 0.30, "Signature of the student ", 1, "R");

$pdf->MultiCell(0, 0.30, "", 0, "R");

 
 $pdf->Cell(0, .40, "Bank's Copy", 1, 2, "C");
$pdf->SetFont('Times','',12);
//MultiCell(float w, float h, string txt [, mixed border [, string align [, boolean fill]]])
$pdf->MultiCell(0, 0.20, "  University Of Kalyani", 1, "C");
$pdf->MultiCell(0, 0.33, "   Challan Number : ".$reg_id, 'LR', "L");
$pdf->MultiCell(0, 0.33, "   Applicant's Name : ".$fname."                   Challan Date :             ", '1', "L");
$pdf->MultiCell(0, 0.35, "  Application ID : ".$reg_id."                        Applied For : M.Tech Part I Admission Test", 1, "C");
$pdf->MultiCell(0, 0.30, "    Payble At : State Bank Of India                    Acct No: SBI000000000000000" , 1, "L");
$pdf->MultiCell(0, 0.50, "    Application Fees : Rs. 500 + 10 (Bank Charge)                IFSC Code: SBI000000 " , 1, "L");

$pdf->MultiCell(0, 0.30, "Signature of the student ", 1, "R");

 
 
//$pdf->AddPage();
//$pdf->Write(0.5, '');
  
$pdf->Output("formprint.pdf");
?>