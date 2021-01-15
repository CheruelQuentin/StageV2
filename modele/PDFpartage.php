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
        $req = $cnx->prepare("select  distinct FORM_LIBELLE , CRE_DATE, CRE_SALLE, CRE_HEUREDEB, CRE_HEUREFIN, STA_ELEMIN, STA_ELEMAX from formation, stage, creneau where STA_FORM = FORM_CODE and STA_CRE = CRE_ID and CRE_DATE > sysdate()");
       $resultat=$req->execute() ;
        

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $resultat = $ligne;
       /* while ($ligne) {
            $resultat[] = $ligne;
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
        }*/
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
    $this->Cell(0,10,utf8_decode('Lycée Jean-Rostand 2020                                                                                                                  Page ').$this->PageNo().'/{nb}',0,0,'C');
}


function Table()
{
    global $FORM_LIBELLE;
    $this->SetFont('Times','',12);
    $stmt = StagePDF();
     
    $this->SetFont('times','',12);
    $this->SetFillColor(153,204,255);
    $this->Cell(190,10,utf8_decode($stmt['FORM_LIBELLE']),1,0,'C',TRUE);

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
    global $CRE_DATE , $CRE_SALLE ,$CRE_HEUREDEB , $CRE_HEUREDEB, $CRE_HEUREFIN, $STA_ELEMIN, $STA_ELEMAX;
    $stmt = StagePDF();
    
    $this->SetFont('times','',12);
    $this->Cell(40,10,utf8_decode($stmt['CRE_DATE']),1,0,'C');
    $this->Cell(35,10,utf8_decode($stmt['CRE_SALLE']),1,0,'C');
    $this->Cell(35,10,utf8_decode($stmt['CRE_HEUREDEB'].'-'.$stmt['CRE_HEUREFIN']),1,0,'C');
    $this->Cell(40,10,utf8_decode($stmt['STA_ELEMIN']),1,0,'C');
    $this->Cell(40,10,utf8_decode($stmt['STA_ELEMAX']),1,0,'C');
    $this->Ln();
                                        }

}

?>