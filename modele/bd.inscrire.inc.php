<?php

include_once "bd.inc.php";

function getInscrire() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from inscrire ");
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

function getInscrireByEle($INS_ELE) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from inscrire where INS_ELE=:INS_ELE");
        $req->bindValue(':INS_ELE', $INS_ELE, PDO::PARAM_INT);

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

    
    function getInscrireByForm($INS_FORM) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from inscrire where INS_FORM=:INS_FORM");
        $req->bindValue(':INS_FORM', $INS_FORM, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getAddInscrire($INS_ELE, $INS_FORM) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into inscrire (INS_ELE,INS_FORM) values(:INS_ELE,:INS_FORM)");

        $req->bindValue(':INS_ELE', $INS_ELE, PDO::PARAM_INT);
        $req->bindValue(':INS_FORM', $INS_FORM, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getDelInscrire($INS_ELE, $INS_FORM) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from inscrire where INS_ELE=:INS_ELE AND INS_FORM=:INS_FORM");
        $req->bindValue(':INS_ELE', $INS_ELE, PDO::PARAM_INT);
        $req->bindValue(':INS_FORM', $INS_FORM, PDO::PARAM_INT);
                
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateInscrire($INS_ELE, $INS_FORM){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `inscrire` SET INS_FORM = :INS_FORM WHERE `inscrire`.INS_ELE=:INS_ELE;");
$req->bindValue(':INS_FORM', $INS_FORM, PDO::PARAM_INT);
$req->bindValue(':INS_ELE', $INS_ELE, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getInscrireListe() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from inscrire, etablissement, eleve where INS_ELE= ELE_ID and ELE_ETA=ETA_ID and ETA_ID=:uti_eta");
        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
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

function getInscrireListe2() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select *  from creneau, enseignant, eleve ,inscrire, stage, formation where FORM_CRE = CRE_ID and FORM_ID= INS_FORM and INS_ELE=ELE_ID and FORM_STA = STA_CODE and FORM_ENS = ENS_ID and ENS_ID =:uti_ens ORDER BY FORM_ID DESC");
        $req->bindValue(':uti_ens', $_SESSION["UTIL_ENS"], PDO::PARAM_INT);
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



?>