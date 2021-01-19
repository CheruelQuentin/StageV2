<?php

include_once "bd.inc.php";

function getTravaillerByEns($TRA_ENS) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from travailler where TRA_ENS=:TRA_ENS");
        $req->bindValue(':TRA_ENS', $TRA_ENS, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getTravaillerByETA($TRA_ETA) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from travailler where TRA_ETA=:TRA_ETA");
        $req->bindValue(':TRA_ETA', $TRA_ETA, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getTravailler() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from travailler");
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
    
 function getAddTravailler($TRA_ENS) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into travailler (TRA_ENS,TRA_ETA) values(:TRA_ENS,:uti_eta)");

        $req->bindValue(':TRA_ENS', $TRA_ENS, PDO::PARAM_INT);
        $req->bindValue(':uti_eta', 8, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelTravailler($TRA_ENS, $TRA_ETA) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from travailler where TRA_ENS=:TRA_ENS AND TRA_ETA=:TRA_ETA");
        $req->bindValue(':TRA_ENS', $TRA_ENS, PDO::PARAM_INT);
        $req->bindValue(':TRA_ETA', $TRA_ETA, PDO::PARAM_INT);
                
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateTravailler($TRA_ENS, $TRA_ETA){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `travailler` SET TRA_ETA = :TRA_ETA WHERE `travailler`.TRA_ENS=:TRA_ENS;");
$req->bindValue(':TRA_ENS', $TRA_ENS, PDO::PARAM_INT);
$req->bindValue(':TRA_ETA', $TRA_ETA, PDO::PARAM_INT);
     
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


?>