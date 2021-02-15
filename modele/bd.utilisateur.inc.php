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

function getUtilisateursMail($ETA_MAIL) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from utilisateur where UTIL_MAIL=:ETA_MAIL");
        $req->bindValue(':ETA_MAIL', $ETA_MAIL, PDO::PARAM_STR);
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

function addUtiEnseignant($ENS_MAIL, $ENS_DATENAISS,$ENS_ID) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($ENS_DATENAISS, "sel");
        $req = $cnx->prepare("insert into utilisateur (UTIL_MAIL, UTIL_MDP, UTIL_CODE,UTIL_ENS) values (:ENS_MAIL,:ENS_DATENAISS,'ENS',:ENS_ID)");
        $req->bindValue(':ENS_MAIL', $ENS_MAIL, PDO::PARAM_STR);
        $req->bindValue(':ENS_DATENAISS', $mdpUCrypt, PDO::PARAM_STR);
        $req->bindValue(':ENS_ID', $ENS_ID, PDO::PARAM_INT);
        
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage(); 
        die();
    }
    return $resultat;
}

function addUtiEtablissement($ETA_MAIL, $ETA_MDP,$ETA_ID) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($ETA_MDP, "sel");
        $req = $cnx->prepare("insert into utilisateur (UTIL_MAIL, UTIL_MDP, UTIL_CODE,UTIL_ETA) values (:ETA_MAIL,:ETA_MDP,'ETAB',:ETA_ID)");
        $req->bindValue(':ETA_MAIL', $ETA_MAIL, PDO::PARAM_STR);
        $req->bindValue(':ETA_MDP', $mdpUCrypt, PDO::PARAM_STR);
        $req->bindValue(':ETA_ID', $ETA_ID, PDO::PARAM_INT);
        
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage(); 
        die();
    }
    return $resultat;
}


function addUtiAdmin($UTIL_MAIL, $UTIL_MDP) {
    try {
        $cnx = connexionPDO();

        $mdpUCrypt = crypt($UTIL_MDP, "sel");
        $req = $cnx->prepare("insert into utilisateur (UTIL_MAIL, UTIL_MDP, UTIL_CODE) values (:mail,:mdp,'ADMIN')");
        $req->bindValue(':mail', $UTIL_MAIL, PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdpUCrypt, PDO::PARAM_STR);
        
        
        
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

function getUpdateUtiMdpEtablissement($UTIL_ETA,$UTIL_MDP){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `utilisateur` SET UTIL_MDP = :zadiste WHERE `utilisateur`.UTIL_ETA=:uti_eta;");
        $mdpUCrypt = crypt($UTIL_MDP, "sel");
        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_STR);
        $req->bindValue(':zadiste', $mdpUCrypt, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getUpdateUtiMdpEnseignant($UTIL_ENS,$UTIL_MDP){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `utilisateur` SET UTIL_MDP = :mdp WHERE `utilisateur`.UTIL_ENS=:uti_ens;");
        $mdpUCrypt = crypt($UTIL_MDP, "sel");
        $req->bindValue(':uti_ens', $_SESSION["UTIL_ENS"], PDO::PARAM_STR);
        $req->bindValue(':mdp', $mdpUCrypt, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



function getUpdateProfilUtilEta($UTIL_ETA,$UTIL_MAIL){
    
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `utilisateur` SET UTIL_MAIL = :mail WHERE `utilisateur`.UTIL_ETA=:uti_eta;");

        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
        $req->bindValue(':mail', $UTIL_MAIL, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}



function getUpdateProfilUtilEns($UTIL_ENS,$UTIL_MAIL){
    
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `utilisateur` SET UTIL_MAIL = :mail WHERE `utilisateur`.UTIL_ENS=:uti_eta;");

        $req->bindValue(':uti_eta', $_SESSION["UTIL_ENS"], PDO::PARAM_INT);
        $req->bindValue(':mail', $UTIL_MAIL, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


?>