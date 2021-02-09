<?php

include_once "bd.inc.php";
function getStageById($STA_ID) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from stage where STA_ID=:STA_ID");
        $req->bindValue(':STA_ID', $STA_ID, PDO::PARAM_INT);

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
        $req = $cnx->prepare("select * from stage order by STA_FORM ,STA_CRE ");
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

function getAddStage($STA_CRE, $STA_FORM, $STA_MAT, $STA_ENS, $STA_ELEMIN, $STA_ELEMAX) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("insert into stage (STA_CRE,STA_FORM,STA_MAT,STA_ENS,STA_ELEMIN,STA_ELEMAX) values(:STA_CRE,:STA_FORM,:STA_MAT,:uti_ens,:STA_ELEMIN,:STA_ELEMAX)");
        $req->bindValue(':STA_CRE', $STA_CRE, PDO::PARAM_INT);
        $req->bindValue(':STA_FORM', $STA_FORM, PDO::PARAM_INT);
        $req->bindValue(':STA_MAT', $STA_MAT, PDO::PARAM_INT);
        $req->bindValue(':uti_ens', $_SESSION["UTIL_ENS"], PDO::PARAM_INT);
        $req->bindValue(':STA_ELEMIN', $STA_ELEMIN, PDO::PARAM_INT);
        $req->bindValue(':STA_ELEMAX', $STA_ELEMAX, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getDelStage($STA_ID) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from stage where STA_ID=:STA_ID");
        $req->bindValue(':STA_ID', $STA_ID, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateStage($STA_CRE, $STA_FORM, $STA_MAT, $STA_ENS, $STA_ELEMIN, $STA_ELEMAX, $STA_ID){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `stage` SET STA_CRE = :STA_CRE,STA_FORM = :STA_FORM, STA_MAT = :STA_MAT,STA_ENS = :STA_ENS, STA_ELEMIN = :STA_ELEMIN, STA_ELEMAX = :STA_ELEMAX, STA_ID = :STA_ID WHERE `stage`.STA_ID=:STA_ID;");

        $req->bindValue(':STA_ID', $STA_ID, PDO::PARAM_INT);
        $req->bindValue(':STA_CRE', $STA_CRE, PDO::PARAM_INT);
        $req->bindValue(':STA_FORM', $STA_FORM, PDO::PARAM_INT);
        $req->bindValue(':STA_MAT', $STA_MAT, PDO::PARAM_INT);
        $req->bindValue(':STA_ENS', $STA_ENS, PDO::PARAM_INT);
        $req->bindValue(':STA_ELEMIN', $STA_ELEMIN, PDO::PARAM_INT);
        $req->bindValue(':STA_ELEMAX', $STA_ELEMAX, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

?>