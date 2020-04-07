<?php
include 'plantilla.php';
require 'connection.php';

$orden="SELECT * FROM facturas";
$resultado= mysql_query($orden);


 $pdf = new PDF ();
 $pdf->AliasPAges();
 $pdf->AddPage();
 $pdf->SetFont('Arial', 'B', 15);

 $pdf->SetFillColor(232,232,232);
 $pdf->cell(70,6, 'id', 1, 0, 'C', 1);
 $pdf->cell(70,6, 'fecha', 1, 0, 'C', 1);
 $pdf->cell(70,6, 'turno', 1, 0, 'C', 1);
 $pdf->cell(70,6, 'capturista', 1, 0, 'C', 1);
 $pdf->cell(70,6, 'autobus', 1, 0, 'C', 1);
 $pdf->cell(70,6, 'rol', 1, 0, 'C', 1);
 $pdf->cell(70,6, 'conductor', 1, 0, 'C', 1);
 $pdf->cell(70,6, 'inversionista', 1, 0, 'C', 1);
 $pdf->cell(70,6, 'monto', 1, 0, 'C', 1);

 $pdf->SetFont('Arial', '', 10);
 while($row= $resultado->fetch_assoc()){
    $pdf->cell(70,6, utf8_decode($row['id']), 1, 0, 'C', 1);
    $pdf->cell(70,6, utf8_decode($row['fecha']), 1, 0, 'C', 1); 
    $pdf->cell(70,6, utf8_decode($row['turno']), 1, 0, 'C', 1); 
    $pdf->cell(70,6, utf8_decode($row['capturista']), 1, 0, 'C', 1); 
    $pdf->cell(70,6, utf8_decode($row['autobus']), 1, 0, 'C', 1); 
    $pdf->cell(70,6, utf8_decode($row['rol']), 1, 0, 'C', 1); 
    $pdf->cell(70,6, utf8_decode($row['conductor']), 1, 0, 'C', 1); 
    $pdf->cell(70,6, utf8_decode($row['inversionista']), 1, 0, 'C', 1); 
    $pdf->cell(70,6, utf8_decode($row['monto']), 1, 0, 'C', 1);    
 }
 $pdf->Output(); 

?> 

