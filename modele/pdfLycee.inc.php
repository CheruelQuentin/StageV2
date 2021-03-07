<?php
require"../fpdf182/fpdf.php";
include_once "../modele/bd.eleve.inc.php";
include_once "../modele/bd.inscrire.inc.php";
include_once "../modele/bd.formation.inc.php";
include_once "../modele/bd.creneau.inc.php";
include_once "../modele/bd.stage.inc.php";
include_once "../modele/bd.etablissement.inc.php";
include_once "../modele/bd.categeta.inc.php";

$date = date("m-d-Y");

function getInscrirePDf($STA_ID) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select DISTINCT ELE_NOM, ELE_DATENAISS, ELE_CLASSE, CRE_DATE, FORM_LIBELLE, CRE_SALLE, CRE_HEUREDEB, CRE_HEUREFIN from etablissement, eleve, inscrire, stage, formation, creneau where ETA_ID= ELE_ETA and INS_ELE = ELE_ID and INS_STA=STA_ID and STA_FORM = FORM_CODE and STA_CRE = CRE_ID and ETA_ID =:uti_eta and STA_ID = :STA_ID");
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

////////////////////////////////////////////////////////////////////////////////////////////////
function getMiam2($STA_ID){


    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select COUNT(INS_ELE) AS nb from etablissement, eleve, inscrire, stage, formation, creneau where ETA_ID= ELE_ETA and INS_ELE = ELE_ID and INS_STA=STA_ID and STA_FORM = FORM_CODE and STA_CRE = CRE_ID AND  STA_ID = :STA_ID");
        
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

function getLibelleCateg($ETA_ID) {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select CAT_LIBELLE from etablissement, categeta where CAT_ID = ETA_CATEG and ETA_ID = :uti_eta");
        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
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



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////:
class PDF extends FPDF
{
// En-tête
function Header()
{
    global $ETA_NOM,$CAT_LIBELLE;
    // Logo
    $this->Image('../image/logo_Rostand.png',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(65);
    // Titre
    $this->Cell(120,15,utf8_decode('Convention de stage - '.$CAT_LIBELLE.' '.$ETA_NOM),1,1,'C');
    
    // Saut de ligne
    $this->Ln(10);
}

// Pied de page
function Footer()
{
global $ETA_NOM , $ETA_VILLE, $CAT_LIBELLE, $date;
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    $this->SetDrawColor(66, 66, 66);
    $this->Line(20, 285, 210-20, 285);

    // Police Arial italique 8
    $this->SetTextColor(66, 66, 66);
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,utf8_decode('Convention ministages '.$CAT_LIBELLE.' '.$ETA_NOM.' - '.$ETA_VILLE.' / Rostand '.$date.'                                                                                                                  Page ').$this->PageNo().'/{nb}',0,0,'C');
}


function Table()
{
    $this->SetFont('times','',9);
    $this->Cell(27,10,'Nom de l\'eleve',1,0,'C');
    $this->Cell(27,10,'Date de Naissance',1,0,'C');
    $this->Cell(27,10,'Classe de l\'eleve',1,0,'C');
    $this->Cell(28,10,'Nom du Mini-Stage',1,0,'C');
    $this->Cell(27,10,'Date du Mini-Stage',1,0,'C'); 
    $this->Cell(27,10,'Salle du Mini-Stage',1,0,'C');
    $this->Cell(27,10,'Heure du Mini-Stage',1,0,'C');
    $this->Ln();
}

function viewTable(){
global $ELE_NOM , $INS_STA ,$ELE_DATENAISS , $ELE_CLASSE, $CRE_DATE, $FORM_LIBELLE, $STA_ID;
    $this->SetFont('Times','',8);
      $stmt=getInscrirePDF($STA_ID);
         for ($i = 0; $i < count($stmt); $i++) {
               $this->Cell(27,10,utf8_decode($stmt[$i]['ELE_NOM']),1,0,'C');
               $this->Cell(27,10,strftime('%d/%m/%Y',strtotime($stmt[$i]['ELE_DATENAISS'])),1,0,'C');
               $this->Cell(27,10,utf8_decode($stmt[$i]['ELE_CLASSE']),1,0,'C');
               $this->Cell(28,10,utf8_decode($stmt[$i]['FORM_LIBELLE']),1,0,'C');
               $this->Cell(27,10,strftime('%A%d/%m/%Y',strtotime($stmt[$i]['CRE_DATE'])),1,0,'C');
               $this->Cell(27,10,utf8_decode($stmt[$i]['CRE_SALLE']),1,0,'C');
               $this->Cell(27,10,substr($stmt[$i]['CRE_HEUREDEB'],0,-3).' - '.substr($stmt[$i]['CRE_HEUREFIN'],0,-3),1,0,'C');
               $this->MultiCell(0,10,"");
                }

        }


}
?>