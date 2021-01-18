<?php
require"../fpdf182/fpdf.php";
include_once "../modele/bd.eleve.inc.php";
include_once "../modele/bd.inscrire.inc.php";
include_once "../modele/bd.formation.inc.php";
include_once "../modele/bd.creneau.inc.php";
include_once "../modele/bd.stage.inc.php";
include_once "../modele/bd.etablissement.inc.php";


function StagePDF(){
$resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select FORM_CODE, FORM_LIBELLE , CRE_DATE, CRE_SALLE, CRE_HEUREDEB, CRE_HEUREFIN, STA_ELEMIN, STA_ELEMAX from formation, stage, creneau where STA_FORM = FORM_CODE and STA_CRE = CRE_ID and CRE_DATE > sysdate()");
        $req->execute() ;
        

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPDFFormationById($FORM_CODE) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select FORM_CODE, FORM_LIBELLE , CRE_DATE, CRE_SALLE, CRE_HEUREDEB, CRE_HEUREFIN, STA_ELEMIN, STA_ELEMAX from formation, stage, creneau where STA_FORM = FORM_CODE and STA_CRE = CRE_ID and FORM_CODE=:FORM_CODE");
        $req->bindValue(':FORM_CODE', $FORM_CODE, PDO::PARAM_STR);

        $req->execute();

         $ligne = $req->fetch(PDO::FETCH_ASSOC);
        while ($ligne) {
            $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
 

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
    $this->Cell(120,15,utf8_decode(' SESSION DE MINI-STAGE' ),1,1,'C');
    
    // Saut de ligne
    $this->Ln(10);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-25);
    $this->SetDrawColor(66, 66, 66);
    $this->Line(30, 278, 210-25, 278);

    // Police Arial italique 8
    $this->SetTextColor(66, 66, 66);
    $this->SetFont('Arial','I',7);
    // Numéro de page
    $this->Ln(3);
    $this->Cell(0,10,utf8_decode('Lycée Jean Rostand - 98 Route d\'Ifs - 14000 Caen'),0,0,'C');
    $this->Ln(7);
    $this->Cell(0,9,utf8_decode('Remarque : Une blouse sera nécessaire pour les matières de physique/chimie.'),0,0,'C');
    $this->Ln(-3);
    $this->Cell(0,9,utf8_decode('Les élèves se présenteront aux professeurs en charge de l\'activité 10 min avant le début de la séance au lieu indiqué.'),0,0,'C');
}


function Table()
{
    
    $this->SetFont('Times','',12);
    $ligne=StagePDF();


     for ($i = 0; $i < count($ligne); $i++) {
    $this->SetFont('times','B',13);
    $this->SetFillColor(153,204,255);
    $this->Cell(190,10,utf8_decode('Enseignement optionnel : '.$ligne[$i]['FORM_LIBELLE']),1,0,'C',TRUE);
    $this->Ln();

    $this->SetFont('times','',12);
    $this->SetFillColor(255,233,51);
    $this->Cell(40,10,utf8_decode('Date proposées'),1,0,'C',TRUE);
    $this->Cell(30,10,utf8_decode('Salle'),1,0,'C',TRUE);
    $this->Cell(40,10,utf8_decode('Horaires'),1,0,'C',TRUE);
    $this->Cell(40,10,utf8_decode('Nombre min. d\'élève'),1,0,'C',TRUE);
    $this->Cell(40,10,utf8_decode('Nombre max. d\'élèves'),1,0,'C',TRUE);
    $this->Ln();

   $result=getPDFFormationById($ligne[$i]['FORM_CODE']);


   
for ($j= 0; $j < count($result); $j++) {
    
    $this->SetFont('times','',12);
    $this->Cell(40,10,strftime('%d/%m/%Y',strtotime($result[$j]['CRE_DATE'])),1,0,'C');
    $this->Cell(30,10,utf8_decode($result[$j]['CRE_SALLE']),1,0,'C');
    $this->Cell(40,10,substr($result[$j]['CRE_HEUREDEB'],0,-3).' - '.substr($result[$j]['CRE_HEUREFIN'],0,-3),1,0,'C');
    $this->Cell(40,10,utf8_decode($result[$j]['STA_ELEMIN']),1,0,'C');
    $this->Cell(40,10,utf8_decode($result[$j]['STA_ELEMAX']),1,0,'C');
$this->Ln();
}$this->Ln();$this->Ln();
 
                                    }    
    
    

}
}
?>