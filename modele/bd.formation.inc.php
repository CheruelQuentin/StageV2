<?php

include_once "bd.inc.php";

function getFormationById($FORM_ID) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from formation where FORM_ID=:FORM_ID");
        $req->bindValue(':FORM_ID', $FORM_ID, PDO::PARAM_INT);

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
        $req = $cnx->prepare("select * from formation order by FORM_CRE DESC");
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

function getAddFormation($FORM_CRE, $FORM_STA, $FORM_MAT, $FORM_ENS, $FORM_ELEMIN, $FORM_ELEMAX) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into formation (FORM_CRE,FORM_STA,FORM_MAT,FORM_ENS,FORM_ELEMIN,FORM_ELEMAX) values(:FORM_CRE,:FORM_STA,:FORM_MAT,:FORM_ENS,:FORM_ELEMIN,:FORM_ELEMAX)");
        $req->bindValue(':FORM_CRE', $FORM_CRE, PDO::PARAM_INT);
        $req->bindValue(':FORM_STA', $FORM_STA, PDO::PARAM_INT);
        $req->bindValue(':FORM_MAT', $FORM_MAT, PDO::PARAM_INT);
        $req->bindValue(':FORM_ENS', $FORM_ENS, PDO::PARAM_INT);
        $req->bindValue(':FORM_ELEMIN', $FORM_ELEMIN, PDO::PARAM_INT);
        $req->bindValue(':FORM_ELEMAX', $FORM_ELEMAX, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getDelFormation($FORM_ID) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from formation where FORM_ID=:FORM_ID");
        $req->bindValue(':FORM_ID', $FORM_ID, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateFormation($FORM_CRE, $FORM_STA, $FORM_MAT, $FORM_ENS, $FORM_ELEMIN, $FORM_ELEMAX, $FORM_ID){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `formation` SET FORM_CRE = :FORM_CRE,FORM_STA = :FORM_STA, FORM_MAT = :FORM_MAT,FORM_ENS = :FORM_ENS, FORM_ELEMIN = :FORM_ELEMIN, FORM_ELEMAX = :FORM_ELEMAX, FORM_ID = :FORM_ID WHERE `formation`.FORM_ID=:FORM_ID;");

        $req->bindValue(':FORM_ID', $FORM_ID, PDO::PARAM_INT);
        $req->bindValue(':FORM_CRE', $FORM_CRE, PDO::PARAM_INT);
        $req->bindValue(':FORM_STA', $FORM_STA, PDO::PARAM_INT);
        $req->bindValue(':FORM_MAT', $FORM_MAT, PDO::PARAM_INT);
        $req->bindValue(':FORM_ENS', $FORM_ENS, PDO::PARAM_INT);
        $req->bindValue(':FORM_ELEMIN', $FORM_ELEMIN, PDO::PARAM_INT);
        $req->bindValue(':FORM_ELEMAX', $FORM_ELEMAX, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>