<?php
    
// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();




$pdf->MultiCell(0,9,"");

$pdf->SetFont('Arial','',5);


$pdf->table();
$pdf->SetFont('Times','',9);
$pdf->MultiCell(0,9,utf8_decode('Les élèves se présenteront aux professeurs en charge de l\'activité 10 min avant le début de la séance au lieu indiqué.'));
$pdf->MultiCell(0,9,utf8_decode('Remarque : Une blouse sera nécessaire pour les matières de physique/chimie.'));


$pdf->Output();
?>