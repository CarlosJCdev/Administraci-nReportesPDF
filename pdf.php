<?php
require ('fpdf/fpdf.php');
 class PDF extends FPDF
 {
     function Header()
     {
         $this->SetFont('Arial', 'B', 10);
         $this->Cell(80);
         $this->Cell(25,13,'Facturacion',1,0,'C');
         $this->Ln(20);

$this->Cell(7, 10, 'Id', 1, 0, 'C', 0);
$this->Cell(25, 10, 'Fecha', 1, 0, 'C', 0);
$this->Cell(20, 10, 'Turno', 1, 0, 'C', 0);
$this->Cell(30, 10, 'Capturista', 1, 0, 'C', 0);
$this->Cell(25, 10, 'Autobus', 1, 0, 'C', 0);
$this->Cell(32, 10, 'Rol', 1, 0, 'C', 0);
$this->Cell(20, 10, 'Conductor', 1, 0, 'C', 0);
$this->Cell(20, 10, utf8_decode('Dueño'), 1, 0, 'C', 0); 
$this->Cell(20, 10, 'Monto', 1, 0, 'C', 0);
$this->Ln(10);
     } 
     function headerTable(){
         $this->Cell(7, 10, 'Id', 1, 0, 'C', 0);
$this->Cell(25, 10, 'Fecha', 1, 0, 'C', 0);
$this->Cell(20, 10, 'Turno', 1, 0, 'C', 0);
$this->Cell(30, 10, 'Capturista', 1, 0, 'C', 0);
$this->Cell(25, 10, 'Autobus', 1, 0, 'C', 0);
$this->Cell(32, 10, 'Rol', 1, 0, 'C', 0);
$this->Cell(20, 10, 'Conductor', 1, 0, 'C', 0);
$this->Cell(20, 10, utf8_decode('Dueño'), 1, 0, 'C', 0); 
$this->Cell(20, 10, 'Monto', 1, 0, 'C', 0);
$this->Ln(10);
     }
     function Footer(){
         $this->SetY(-15);
         $this->SetFont('Arial','I', 8);
         $this->Cell(0,10,'Pagina'.$this->PAgeNo().'/{nb}',0,0,'C');
     }
 }
require 'conex.php';
$consulta="SELECT * FROM facturas";
$resultado= $mysqli->query($consulta);
$pdf = new PDF(); 
$pdf->AliasNbPages();
$pdf->AddPage(); 
$pdf->SetFont('Arial','B',10); 

while($row = $resultado->fetch_assoc()){
$pdf->Cell(7, 10, $row['id'], 1, 0, 'C', 0);
$pdf->Cell(25, 10, $row['fecha'], 1, 0, 'C', 0);
$pdf->Cell(20, 10, $row['turno'], 1, 0, 'C', 0);
$pdf->Cell(30, 10, $row['capturista'], 1, 0, 'C', 0);
$pdf->Cell(25, 10, $row['autobus'], 1, 0, 'C', 0);
$pdf->Cell(32, 10, $row['rol'], 1, 0, 'C', 0);
$pdf->Cell(20, 10, $row['conductor'], 1, 0, 'C', 0);
$pdf->Cell(20, 10, $row['inversionista'], 1, 0, 'C', 0); 
$pdf->Cell(20, 10, $row['monto'], 1, 0, 'C', 0);


}
$pdf->Output(); 
?>

 

 
