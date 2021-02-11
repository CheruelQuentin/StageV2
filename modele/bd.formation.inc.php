<?php

include_once "bd.inc.php";

function getFormationById($FORM_CODE) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from formation where FORM_CODE=:FORM_CODE");
        $req->bindValue(':FORM_CODE', $FORM_CODE, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getFormation() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from formation");
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
    
function getAddFormation($FORM_CODE, $FORM_LIBELLE) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into formation (FORM_LIBELLE) values(:FORM_LIBELLE)");

        $req->bindValue(':FORM_LIBELLE', $FORM_LIBELLE, PDO::PARAM_STR);
        

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelFormation($FORM_CODE) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from formation where FORM_CODE=:FORM_CODE");
        $req->bindValue(':FORM_CODE', $FORM_CODE, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
function getUpdateFormation($FORM_LIBELLE, $FORM_CODE){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `formation` SET FORM_LIBELLE = :FORM_LIBELLE WHERE `formation`.FORM_CODE=:FORM_CODE;");
$req->bindValue(':FORM_LIBELLE', $FORM_LIBELLE, PDO::PARAM_STR);
$req->bindValue(':FORM_CODE', $FORM_CODE, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getFormationIdByInfo($FORM_LIBELLE) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select FORM_CODE from formation where FORM_LIBELLE=:FORM_LIBELLE");
        $req->bindValue(':FORM_LIBELLE', $FORM_LIBELLE, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['FORM_CODE'];
}



function getFormationByStage($IdS) {
   

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from enseignant, stage, matiere, creneau, formation where STA_ENS=ENS_ID and STA_CRE=CRE_ID and STA_MAT=MAT_CODE and STA_ID=:IdS ");
                
                $req->bindValue(':IdS', $IdS, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
       
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>