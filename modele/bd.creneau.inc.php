<?php

include_once "bd.inc.php";

function getCreneauById($CRE_ID) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from creneau where CRE_ID=:CRE_ID");
        $req->bindValue(':CRE_ID', $CRE_ID, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getCreneau() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from creneau order by CRE_DATE DESC");
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
    

function getAddCreaneau($CRE_DATE,$CRE_DATEFIN, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare( "insert into creneau (CRE_DATE,CRE_DATEFIN,CRE_HEUREDEB,CRE_SALLE,CRE_HEUREFIN,CRE_VALIDE ) values(:CRE_DATE,:CRE_DATEFIN,:CRE_HEUREDEB,:CRE_SALLE,:CRE_HEUREFIN,0)");

        
        $req->bindValue(':CRE_DATE', $CRE_DATE, PDO::PARAM_STR);
        $req->bindValue(':CRE_DATEFIN', $CRE_DATEFIN, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREDEB', $CRE_HEUREDEB, PDO::PARAM_STR);
        $req->bindValue(':CRE_SALLE', $CRE_SALLE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREFIN', $CRE_HEUREFIN, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelCreneau($CRE_ID) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from creneau where CRE_ID=:CRE_ID");
        $req->bindValue(':CRE_ID', $CRE_ID, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateCreneau( $CRE_DATE,$CRE_DATEFIN, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN, $CRE_ID){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `creneau` SET CRE_DATE = :CRE_DATE,CRE_DATEFIN = :CRE_DATEFIN, CRE_HEUREDEB = :CRE_HEUREDEB,CRE_SALLE = :CRE_SALLE, CRE_HEUREFIN = :CRE_HEUREFIN  WHERE `creneau`.CRE_ID=:CRE_ID;");
        
        $req->bindValue(':CRE_ID', $CRE_ID, PDO::PARAM_INT);
        
        $req->bindValue(':CRE_DATE', $CRE_DATE, PDO::PARAM_STR);
        $req->bindValue(':CRE_DATEFIN', $CRE_DATEFIN, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREDEB', $CRE_HEUREDEB, PDO::PARAM_STR);
        $req->bindValue(':CRE_SALLE', $CRE_SALLE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREFIN', $CRE_HEUREFIN, PDO::PARAM_STR);
        

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getCreneauIdByInfo($creneau) {

    $creneau=explode(" - ",$creneau);
    $CRE_DATE=$creneau[0];
    $CRE_SALLE=$creneau[1];
    $CRE_HEUREDEB=$creneau[2];
    $CRE_HEUREFIN=$creneau[3];

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select CRE_ID from creneau where CRE_DATE=:CRE_DATE AND CRE_SALLE=:CRE_SALLE AND CRE_HEUREDEB=:CRE_HEUREDEB AND CRE_HEUREFIN=:CRE_HEUREFIN AND");
        $req->bindValue(':CRE_DATE', $CRE_DATE, PDO::PARAM_STR);
        $req->bindValue(':CRE_SALLE', $CRE_SALLE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREDEB', $CRE_HEUREDEB, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREFIN', $CRE_HEUREFIN, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['CRE_ID'];
}

function getCreneauIdByInfo2($CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN) {


    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select CRE_ID from creneau where CRE_DATE=:CRE_DATE AND CRE_SALLE=:CRE_SALLE AND CRE_HEUREDEB=:CRE_HEUREDEB AND CRE_HEUREFIN=:CRE_HEUREFIN ");
        $req->bindValue(':CRE_DATE', $CRE_DATE, PDO::PARAM_STR);
        $req->bindValue(':CRE_SALLE', $CRE_SALLE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREDEB', $CRE_HEUREDEB, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREFIN', $CRE_HEUREFIN, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['CRE_ID'];
}



function getListeCreneau() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from  formation order by FORM_LIBELLE ");
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



function getCreneauByForm($FORM_CODE) {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from formation, stage, creneau, enseignant where STA_FORM = FORM_CODE and STA_CRE = CRE_ID and FORM_CODE=:FORM_CODE AND STA_ENS = ENS_ID AND ENS_ID =:uti_ens");
        $req->bindValue(':uti_ens', $_SESSION["UTIL_ENS"], PDO::PARAM_INT);
        $req->bindValue(':FORM_CODE', $FORM_CODE, PDO::PARAM_INT);

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


function getInscritByForm($FORM_CODE) {
    $resultat = array();
    try {
        $cnx = connexionPDO();
            $req = $cnx->prepare("select * from formation, stage, creneau, etablissement,inscrire, eleve 

                where STA_FORM = FORM_CODE 
                and STA_CRE = CRE_ID 
                and FORM_CODE=:FORM_CODE 
                AND ELE_ETA = ETA_ID 
                and INS_ELE = ELE_ID
                and STA_ID = INS_STA
                AND ELE_ETA =:etab
                and INS_ELE = INS_STA");

        $req->bindValue(':etab', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
        $req->bindValue(':FORM_CODE', $FORM_CODE, PDO::PARAM_INT);

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

function getCheckoutCreneaux() {
    if (isset($_POST['checkCreneau'])){

        foreach( $_POST['checkCreneau'] as $checkCreneau){
        
        
        
        $cnx = connexionPDO();
        $req = $cnx->prepare("update creneau set CRE_VALIDE=1 where CRE_ID=".$checkCreneau);
                $resultat = $req->execute();
        
        }
        
        }
}
?>