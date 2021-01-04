<?php

include_once "bd.inc.php";

function getEnseignerByMat($ENSR_MAT) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from enseigner where ENSR_MAT=:ENSR_MAT");
        $req->bindValue(':ENSR_MAT', $ENSR_MAT, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getEnseignerByEns($ENSR_ENS) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from enseigner where ENSR_ENS=:ENSR_ENS");
        $req->bindValue(':ENSR_ENS', $ENSR_ENS, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getEnseigner() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from enseigner");
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
    
    function getAddEnseigner($ENSR_MAT, $ENSR_ENS) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into enseigner (ENSR_MAT,ENSR_ENS) values(:ENSR_MAT,:ENSR_ENS)");

        $req->bindValue(':ENSR_MAT', $ENSR_MAT, PDO::PARAM_INT);
        $req->bindValue(':ENSR_ENS', $ENSR_ENS, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelEnseignant($ENSR_MAT, $ENSR_ENS) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from enseigner where ENSR_MAT=:ENSR_MAT AND ENSR_ENS=:ENSR_ENS");
        $req->bindValue(':ENSR_MAT', $ENSR_MAT, PDO::PARAM_INT);
        $req->bindValue(':ENSR_ENS', $ENSR_ENS, PDO::PARAM_INT);
                
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateEnseigner($ENSR_MAT, $ENSR_ENS){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `enseigner` SET ENSR_ENS = :ENSR_ENS WHERE `enseigner`.ENSR_MAT=:ENSR_MAT;");
        
        $req->bindValue(':ENSR_MAT', $ENSR_MAT, PDO::PARAM_INT);
        $req->bindValue(':ENSR_ENS', $ENSR_ENS, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
?>