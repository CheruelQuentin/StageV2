<?php

include_once "bd.inc.php";

function getStageById($sta_code) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from stage where sta_code=:sta_code");
        $req->bindValue(':sta_code', $sta_code, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getStage() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from stage");
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
    
function getAddStage($STA_CODE, $STA_LIBELLE) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into stage (STA_LIBELLE) values(:STA_LIBELLE)");

        $req->bindValue(':STA_LIBELLE', $STA_LIBELLE, PDO::PARAM_STR);
        

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelStage($STA_CODE) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from stage where STA_CODE=:STA_CODE");
        $req->bindValue(':STA_CODE', $STA_CODE, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
function getUpdateStage($STA_LIBELLE, $STA_CODE){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `stage` SET STA_LIBELLE = :STA_LIBELLE WHERE `stage`.STA_CODE=:STA_CODE;");
$req->bindValue(':STA_LIBELLE', $STA_LIBELLE, PDO::PARAM_STR);
$req->bindValue(':STA_CODE', $STA_CODE, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getStageIdByInfo($STA_LIBELLE) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select STA_CODE from stage where STA_LIBELLE=:STA_LIBELLE");
        $req->bindValue(':STA_LIBELLE', $STA_LIBELLE, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['STA_CODE'];
}
?>