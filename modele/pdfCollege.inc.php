<?php
require"../fpdf182/fpdf.php";
include_once "../modele/bd.eleve.inc.php";
include_once "../modele/bd.inscrire.inc.php";



function getInscrirePDF2() { 
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select DISTINCT ELE_NOM,ELE_CLASSE,ELE_DATENAISS,STA_LIBELLE from inscrire,eleve,stage,formation,etablissement,utilisateur where INS_ELE = ELE_ID and INS_FORM = FORM_STA and FORM_STA = STA_CODE and ELE_ETA = ETA_ID and ETA_MAIL = :UTIL_MAIL ORDER BY ELE_NOM, ELE_CLASSE;");
        $req->bindValue(':UTIL_MAIL', $_SESSION['UTIL_MAIL'], PDO::PARAM_STR);

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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function getMiam2() {


    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select COUNT(INS_ELE) from inscrire,eleve,etablissement,utilisateur where INS_ELE = ELE_ID and ELE_ETA = ETA_ID and ETA_ID=:uti_eta");
        $req->bindValue(':UTIL_MAIL', $_SESSION['UTIL_MAIL'], PDO::PARAM_STR);
        $resultat=$req->execute() ;
        

        $ligne = $req->fetch(PDO::PARAM_STR);
        while ($ligne) {
            $resultat = $ligne;
            $ligne = $req->fetch(PDO::PARAM_STR);
        }
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////:
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
    $this->Cell(120,15,utf8_decode('Convention de stage - Collège '.$ETA_NOM),1,1,'C');
    
    // Saut de ligne
    $this->Ln(10);
}

// Pied de page
function Footer()
{
global $ETA_NOM , $ETA_VILLE;
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    $this->SetDrawColor(66, 66, 66);
    $this->Line(20, 285, 210-20, 285);

    // Police Arial italique 8
    $this->SetTextColor(66, 66, 66);
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,utf8_decode('Convention ministages Collège '.$ETA_NOM.'-'.$ETA_VILLE.' /Rostand 2020                                                                                                                  Page ').$this->PageNo().'/{nb}',0,0,'C');
}
function Table()
{
    $this->SetFont('times','',12);
    $this->Cell(40,10,'Nom de l\'eleve',1,0,'C');
    $this->Cell(40,10,'Formation',1,0,'C');
    $this->Cell(40,10,'Date de Naissance',1,0,'C');
    $this->Cell(40,10,'Classe de l\'eleve',1,0,'C');
    $this->Ln();
}

function viewTable(){
global $ELE_NOM , $INS_FORM;
    $this->SetFont('Times','',12);
      $stmt=getInscrirePDF2();
         for ($i = 0; $i < count($stmt); $i++) {
               $this->Cell(40,10,$stmt[$i]['ELE_NOM'],1,0,'C');
               $this->Cell(40,10,$stmt[$i]['STA_LIBELLE'],1,0,'C');
               $this->Cell(40,10,$stmt[$i]['ELE_DATENAISS'],1,0,'C');
               $this->Cell(40,10,$stmt[$i]['ELE_CLASSE'],1,0,'C');
               $this->MultiCell(0,10,"");
                }

        }


}?>