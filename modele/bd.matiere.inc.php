<?php

include_once "bd.inc.php";

function getMatiere() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from matiere");
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
   
function getMatiereById($MAT_CODE) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from matiere where MAT_CODE=:MAT_CODE");
        $req->bindValue(':MAT_CODE', $MAT_CODE, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getAddMatiere($MAT_LIBELLE) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into matiere (MAT_LIBELLE) values(:MAT_LIBELLE)");

        $req->bindValue(':MAT_LIBELLE', $MAT_LIBELLE, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelMatiere($MAT_CODE) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from matiere where MAT_CODE=:MAT_CODE");
        $req->bindValue(':MAT_CODE', $MAT_CODE, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getUpdateMatiere($MAT_LIBELLE, $MAT_CODE){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `matiere` SET MAT_LIBELLE = :MAT_LIBELLE WHERE `matiere`.MAT_CODE=:MAT_CODE;");
$req->bindValue(':MAT_LIBELLE', $MAT_LIBELLE, PDO::PARAM_STR);
$req->bindValue(':MAT_CODE', $MAT_CODE, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getMatiereIdByInfo($MAT_LIBELLE) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select MAT_CODE from matiere where MAT_LIBELLE=:MAT_LIBELLE");
        $req->bindValue(':MAT_LIBELLE', $MAT_LIBELLE, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['MAT_CODE'];
}
?>