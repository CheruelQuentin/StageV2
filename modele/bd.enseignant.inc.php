<?php

include_once "bd.inc.php";
session_start();
function getEnseignantById($ENS_ID) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from enseignant where ENS_ID=:ENS_ID");
        $req->bindValue(':ENS_ID', $ENS_ID, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getEnseignant() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from enseignant");
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
    function getAddEnseignant($ENS_NOM, $ENS_PRENOM, $ENS_MAIL, $ENS_TEL, $ENS_DATENAISS) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into enseignant (ENS_NOM,ENS_PRENOM,ENS_MAIL,ENS_TEL,ENS_DATENAISS) values(:ENS_NOM,:ENS_PRENOM,:ENS_MAIL,:ENS_TEL,:ENS_DATENAISS)");

        $req->bindValue(':ENS_NOM', $ENS_NOM, PDO::PARAM_STR);
        $req->bindValue(':ENS_PRENOM', $ENS_PRENOM, PDO::PARAM_STR);
        $req->bindValue(':ENS_MAIL', $ENS_MAIL, PDO::PARAM_STR);
        $req->bindValue(':ENS_TEL', $ENS_TEL, PDO::PARAM_STR);
        $req->bindValue(':ENS_DATENAISS', $ENS_DATENAISS, PDO::PARAM_STR);
        

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelEnseignant($ENS_ID) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from enseignant where ENS_ID=:ENS_ID");
        $req->bindValue(':ENS_ID', $ENS_ID, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateEnseignant($ENS_NOM, $ENS_PRENOM, $ENS_MAIL, $ENS_TEL, $ENS_DATENAISS, $ENS_ID){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE enseignant SET ENS_NOM = :ENS_NOM , ENS_PRENOM = :ENS_PRENOM , ENS_MAIL = :ENS_MAIL , ENS_TEL = :ENS_TEL , ENS_DATENAISS = :ENS_DATENAISS WHERE ENS_ID = :ENS_ID ;");
        
        $req->bindValue(':ENS_ID', $ENS_ID, PDO::PARAM_INT);
        $req->bindValue(':ENS_NOM', $ENS_NOM, PDO::PARAM_STR);
        $req->bindValue(':ENS_PRENOM', $ENS_PRENOM, PDO::PARAM_STR);
        $req->bindValue(':ENS_MAIL', $ENS_MAIL, PDO::PARAM_STR);
        $req->bindValue(':ENS_TEL', $ENS_TEL, PDO::PARAM_STR);
        $req->bindValue(':ENS_DATENAISS', $ENS_DATENAISS, PDO::PARAM_STR);
        

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
//recup partielle 
function getEnseignantIdByInfo($enseignant) {

    $enseignant=explode(" - ",$enseignant);
    $ENS_NOM=$enseignant[0];
    $ENS_PRENOM=$enseignant[1];
    $ENS_MAIL=$enseignant[2];

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select ENS_ID from enseignant where ENS_NOM=:ENS_NOM AND ENS_PRENOM=:ENS_PRENOM AND ENS_MAIL=:ENS_MAIL");
        $req->bindValue(':ENS_NOM', $ENS_NOM, PDO::PARAM_STR);
        $req->bindValue(':ENS_PRENOM', $ENS_PRENOM, PDO::PARAM_STR);
        $req->bindValue(':ENS_MAIL', $ENS_MAIL, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['ENS_ID'];
}
//recup precise est total
function getEnseignantIdByInfo2($ENS_NOM,$ENS_PRENOM,$ENS_DATENAISS,$ENS_MAIL) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select ENS_ID from enseignant where ENS_NOM=:ENS_NOM AND ENS_PRENOM=:ENS_PRENOM AND ENS_DATENAISS=:ENS_DATENAISS AND ENS_MAIL=:ENS_MAIL ");
        $req->bindValue(':ENS_NOM', $ENS_NOM, PDO::PARAM_STR);
        $req->bindValue(':ENS_PRENOM', $ENS_PRENOM, PDO::PARAM_STR);
        $req->bindValue(':ENS_DATENAISS', $ENS_DATENAISS, PDO::PARAM_STR);
        $req->bindValue(':ENS_MAIL', $ENS_MAIL, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['ENS_ID'];
}


?>