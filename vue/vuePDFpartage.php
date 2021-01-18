<?php
    
// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();




$pdf->MultiCell(0,9,"");

$pdf->SetFont('Arial','',5);


$pdf->table();
$pdf->SetFont('Times','',9);




$pdf->Output();
?>