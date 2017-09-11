<?php
require('tcpdf/tcpdf.php'); 
include 'db_connect.php';

class PDF extends TCPDF {
 
function Header() {
    $this->SetFont('Times','',18);
    $this->SetY(0.25);
    $this->Cell(0, .25, "APPLICATION FORM FOR M.TECH PART I", '', 2, "C");
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

$sql=mysql_query("select * from applicant where reg_id='tmp8304626'");
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
$pdf->Cell(0, .40, "University Of Kalyani", 1, 2, "C");
$pdf->SetFont('Times','',12);
//MultiCell(float w, float h, string txt [, mixed border [, string align [, boolean fill]]])
$pdf->MultiCell(0, 0.33, "   Registration ID : ".$reg_id."                       Name in Full :".$fname, 'LR', "L");
$pdf->MultiCell(0, 0.40, "  Student Information", 1, "C");
$pdf->MultiCell(0, 0.30, "   Caste: ".$caste."                              Gender :".$gender."                         DOB :".$dob , 1, "L");
$pdf->MultiCell(0, 0.30, "   Religion :". $religion."       Email ID: ".$email."       Mobile :".$mobile , 1, "L");
$pdf->MultiCell(0, 0.36, "   Nationality :". $nationality."                   PH: ".$disability."                   Blood Group :".$blood , 1, "L");
$pdf->MultiCell(0, 0.40, "  Education Details", 1, "C");
$pdf->MultiCell(0, 0.30, "   10th Board: ".$board_x."         10th Percentage(%) :". $per_x."             10th Year: ".$year_x, 1, "L");
$pdf->MultiCell(0, 0.30, "   10+2 Board: ".$board_xii."         10+2 Percentage(%) :". $per_xii."             10+2 Year: ".$year_xii, 1, "L");
$pdf->MultiCell(0, 0.36, "   Qualifying Exam: ".$qualifying."       Qualifying (%) :". $per_gradu."          Qualifying Year: ".$year_gradu, 1, "L");
$pdf->MultiCell(0, 0.36, "   University: ".$university."           College :". $per_xii."               Roll No: ".$roll, 1, "L");
$pdf->MultiCell(0, 0.40, "  Address & Family Details", 1, "C");
$pdf->MultiCell(0, 0.30, "   Residencial Address : ".$resi_address, 1, "L");
$pdf->MultiCell(0, 0.36, "   Permanent Address : ".$per_address, 1, "L");
$pdf->MultiCell(0, 0.30, "   State: ".$state."             District :". $district."             Pin Code: ".$pin, 1, "L");
$pdf->MultiCell(0, 0.30, "   Father's Name: ".$father."             Mother's Name :". $mother."             Family Income: ".$income, 1, "L");
$pdf->MultiCell(0, 0.30, "   Father's Occupation: ".$occupation."     Grdn's Name :". $guardian."       Grdn's Phone: ".$guardian_phone, 1, "L");
$pdf->MultiCell(0, 0.40, "   Rank in Gate : ".$gate_rank, 1, "C");
$pdf->MultiCell(0, 0.55, "  ", 1, "C");
$pdf->MultiCell(0, 0.26, "   Declaration Of the Candidate : ", 1, "C");
$pdf->MultiCell(0, 0.55, "   I do hereby declare that all the information furnished above is true to the best of my knowledge and belief. If any information found incorrect, the department have the right to cancel my application.", 1, "L");
$pdf->MultiCell(0, 0.50, "Date......................                                                                               Signature of the student ", 1, "R");

 
//$pdf->AddPage();
//$pdf->Write(0.5, '');
  
$pdf->Output("formprint.pdf");
?>