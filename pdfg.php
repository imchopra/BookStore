<?php
//include connection file 
include "dbconnect.php";
include_once('fpdf184/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    
	$this->Image('logo/logo.png',70,10,50);
	$this->Ln(55);
    $this->SetFont('Arial','B',13);
    $this->Ln(20);
    
    // $this->Cell(58,10,'Order Number',0,0,'C');
    // $this->Cell(58,10,'Invoice Date',0,0,'C');
    // $this->Cell(50,10,'Ammount',0,0,'C');

    $this->Cell(170,-30,'246 Hillcrest Road Cambridge',0,0,'C');
    $this->Ln(10);
    $this->Cell(58,10,'Order Number',0,0,'C');
    $this->Cell(58,10,'Invoice Date',0,0,'C');
    $this->Cell(50,10,'Amount',0,0,'C');
}
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(100);
    // Arial italic 8
    $this->SetFont('Arial','B',13);
    // Page number
    $this->Cell(100);
  
}


$display_heading = array('ID'=>'idorder', 'invoiced_date', 'amount');
function body(){

// $this->Cell(188,10,'Order Number',0,0,'C');
// $this->Cell(58,10,'Invoice Date',0,0,'C');
// $this->Cell(50,10,'Ammount',0,0,'C');

}
$result = mysqli_query($conn, "SELECT `idorder`, `invoiced_date`, `amount` FROM `order`") or die("database error:". mysqli_error($conn));


$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();

foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
$pdf->SetFont('Arial','',10);
foreach($row as $column)
$pdf->Cell(60,10,$column,1);
}
$pdf->Output();
?>
