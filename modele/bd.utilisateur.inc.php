<?php

include_once "bd.inc.php";

function getUtilisateurs() {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur");
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

function getUtilisateurByMail($Mail) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur where UTIL_MAIL=:Mail");
        $req->bindValue(':Mail', $Mail, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getEtablissementByMail($Mail) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from etablissement, utilisateur where ETA_ID = UTIL_ETA and UTIL_MAIL=:Mail");
        $req->bindValue(':Mail', $Mail, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getEnseignantByMail($Mail) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from enseignant, utilisateur where UTIL_ENS = ENS_ID and UTIL_MAIL=:Mail");
        $req->bindValue(':Mail', $Mail, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getTypeUtilisateurByMail($Mail) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select UTIL_CODE from utilisateur where UTIL_MAIL=:Mail");
        $req->bindValue(':Mail', $Mail, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_NUM);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat[0];
}

function addUtilisateur($Mail, $Mdp, $type) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($Mdp, "sel");
        $req = $cnx->prepare("insert into utilisateur (UTIL_MAIL, UTIL_MDP, UTIL_TYPE) values(:Mail,:Mdp,:type)");
        $req->bindValue(':Mail', $Mail, PDO::PARAM_STR);
        $req->bindValue(':Mdp', $mdpUCrypt, PDO::PARAM_STR);
        $req->bindValue(':type', $pseudo, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function addUtiEnseignant($ENS_MAIL, $ENS_DATENAISS) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($ENS_DATENAISS, "sel");
        $req = $cnx->prepare("insert into utilisateur (UTIL_MAIL, UTIL_MDP, UTIL_CODE) values (:ENS_MAIL,:ENS_DATENAISS,'ENS')");
        $req->bindValue(':ENS_MAIL', $ENS_MAIL, PDO::PARAM_STR);
        $req->bindValue(':ENS_DATENAISS', $mdpUCrypt, PDO::PARAM_STR);
        
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage(); 
        die();
    }
    return $resultat;
}

function addUtiEtablissement($ETA_MAIL, $ETA_PROVNOM) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($ETA_PROVNOM, "sel");
        $req = $cnx->prepare("insert into utilisateur (UTIL_MAIL, UTIL_MDP, UTIL_CODE) values (:ETA_MAIL,:ETA_PROVNOM,'ETAB')");
        $req->bindValue(':ETA_MAIL', $ETA_MAIL, PDO::PARAM_STR);
        $req->bindValue(':ETA_PROVNOM', $mdpUCrypt, PDO::PARAM_STR);
        
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage(); 
        die();
    }
    return $resultat;
}

function getUpdateUtiMdp($UTIL_MAIL,$UTIL_MDP){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `utilisateur` SET UTIL_MAIL = :UTIL_MAIL, UTIL_MDP = :UTIL_MDP WHERE `utilisateur`.UTIL_MAIL=:UTIL_MAIL;");
        $mdpUCrypt = crypt($UTIL_MDP, "sel");
        $req->bindValue(':UTIL_MAIL', $UTIL_MAIL, PDO::PARAM_STR);
        $req->bindValue(':UTIL_MDP', $mdpUCrypt, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



?>