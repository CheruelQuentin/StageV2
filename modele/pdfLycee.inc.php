<?php
require"../fpdf182/fpdf.php";
include_once "../modele/bd.eleve.inc.php";
include_once "../modele/bd.inscrire.inc.php";
include_once "../modele/bd.formation.inc.php";
include_once "../modele/bd.creneau.inc.php";
include_once "../modele/bd.stage.inc.php";
include_once "../modele/bd.etablissement.inc.php";


function getInscrirePDf($STA_ID) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select DISTINCT ELE_NOM, ELE_DATENAISS, ELE_CLASSE, CRE_DATE, FORM_LIBELLE from etablissement, eleve, inscrire, stage, formation, creneau where ETA_ID= ELE_ETA and INS_ELE = ELE_ID and INS_STA=STA_ID and STA_FORM = FORM_CODE and STA_CRE = CRE_ID and ETA_ID =:uti_eta and STA_ID = :STA_ID");
        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
        $req->bindValue(':STA_ID', $STA_ID, PDO::PARAM_INT);
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
function getMiam($STA_ID){


    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select COUNT(INS_ELE) AS nb from etablissement, eleve, inscrire, stage, formation, creneau where ETA_ID= ELE_ETA and INS_ELE = ELE_ID and INS_STA=STA_ID and STA_FORM = FORM_CODE and STA_CRE = CRE_ID and ETA_ID =:uti_eta AND  STA_ID = :STA_ID");
        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
        $req->bindValue(':STA_ID', $STA_ID, PDO::PARAM_INT);
        $resultat=$req->execute() ;
        

        $ligne = $req->fetch(PDO::FETCH_ASSOC);
        $resultat = $ligne['nb'];
      //  echo "<br>nb eleve ".$resultat;
        /*while ($ligne) {
            $resultat = $ligne;
            $ligne = $req->fetch(PDO::PARAM_STR);
        }*/
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
    $this->Cell(120,15,utf8_decode('Convention de stage - Établissement '.$ETA_NOM),1,1,'C');
    
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
    $this->Cell(0,10,utf8_decode('Convention ministages Établissement '.$ETA_NOM.'-'.$ETA_VILLE.' /Rostand 2020                                                                                                                  Page ').$this->PageNo().'/{nb}',0,0,'C');
}
function Table()
{
    $this->SetFont('times','',12);
    $this->Cell(30,10,'Nom de l\'eleve',1,0,'C');
    $this->Cell(40,10,'Date de Naissance',1,0,'C');
    $this->Cell(40,10,'Classe de l\'eleve',1,0,'C');
    $this->Cell(40,10,'Date du Mini-Stage',1,0,'C');
    $this->Cell(40,10,'Nom du Mini-Stage',1,0,'C');
    $this->Ln();
}

function viewTable(){
global $ELE_NOM , $INS_STA ,$ELE_DATENAISS , $ELE_CLASSE, $CRE_DATE, $FORM_LIBELLE, $STA_ID;
    $this->SetFont('Times','',12);
      $stmt=getInscrirePDF($STA_ID);
         for ($i = 0; $i < count($stmt); $i++) {
               $this->Cell(30,10,$stmt[$i]['ELE_NOM'],1,0,'C');
               $this->Cell(40,10,strftime('%d/%m/%Y',strtotime($stmt[$i]['ELE_DATENAISS'])),1,0,'C');
               $this->Cell(40,10,$stmt[$i]['ELE_CLASSE'],1,0,'C');
               $this->Cell(40,10,$stmt[$i]['CRE_DATE'],1,0,'C');
               $this->Cell(40,10,$stmt[$i]['FORM_LIBELLE'],1,0,'C');
               $this->MultiCell(0,10,"");
                }

        }


}?>