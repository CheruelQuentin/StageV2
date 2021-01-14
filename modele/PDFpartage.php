<?php
require"../fpdf182/fpdf.php";
include_once "../modele/bd.eleve.inc.php";
include_once "../modele/bd.inscrire.inc.php";
include_once "../modele/bd.formation.inc.php";
include_once "../modele/bd.creneau.inc.php";
include_once "../modele/bd.stage.inc.php";
include_once "../modele/bd.etablissement.inc.php";



class PDF extends FPDF
{
// En-tête
function Header()
{
    global $ETA_NOM;
    // Logo
    $this->Image('../image/logo_Rostand.png',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(65);
    // Titre
    $this->Cell(120,15,utf8_decode(' SESSION DE STAGE' ),1,1,'C');
    
    // Saut de ligne
    $this->Ln(10);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    $this->SetDrawColor(66, 66, 66);
    $this->Line(20, 285, 210-20, 285);

    // Police Arial italique 8
    $this->SetTextColor(66, 66, 66);
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,utf8_decode(' Rostand 2020                                                                                                                  Page ').$this->PageNo().'/{nb}',0,0,'C');
}


function Table()
{
    $this->SetFont('times','',12);
    $this->Cell(190,10,'Nom de la formation',1,0,'C');

    $this->Ln();
}
function viewTable()
{
    $this->SetFont('times','',12);
    $this->Cell(40,10,utf8_decode('Date proposées'),1,0,'C');
    $this->Cell(35,10,utf8_decode('Salle'),1,0,'C');
    $this->Cell(35,10,utf8_decode('Horaires'),1,0,'C');
    $this->Cell(40,10,utf8_decode('Nombre min. d\'élève'),1,0,'C');
    $this->Cell(40,10,utf8_decode('Nombre max. d\'élève'),1,0,'C');
    $this->Ln();
}
function viewTable2()
{
    $this->SetFont('times','',12);
    $this->Cell(40,10,utf8_decode(123456),1,0,'C');
    $this->Cell(35,10,utf8_decode('Salle'),1,0,'C');
    $this->Cell(35,10,utf8_decode(123456),1,0,'C');
    $this->Cell(40,10,utf8_decode(12345),1,0,'C');
    $this->Cell(40,10,utf8_decode(12345),1,0,'C');
    $this->Ln();
}
}
?>