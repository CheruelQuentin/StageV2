<?php

include_once "bd.inc.php";

function getPrefererByCre($PREF_CRE) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from preferer where PREF_CRE=:PREF_CRE");
        $req->bindValue(':PREF_CRE', $PREF_CRE, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPrefererByENS($PREF_ENS) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from preferer where PREF_ENS=:PREF_ENS");
        $req->bindValue(':PREF_ENS', $PREF_ENS, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getPreferer() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from preferer");
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
    

function getAddPreferer($PREF_ENS, $PREF_CRE) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into preferer ( PREF_ENS,PREF_CRE) values(:uti_ens,:PREF_CRE)");

        $req->bindValue(':uti_ens', $_SESSION["UTIL_ENS"], PDO::PARAM_INT);
        $req->bindValue(':PREF_CRE', $PREF_CRE, PDO::PARAM_INT);


        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelPreferer($PREF_CRE, $PREF_ENS) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from preferer where PREF_CRE=:PREF_CRE AND PREF_ENS=:PREF_ENS");
        $req->bindValue(':PREF_CRE', $PREF_CRE, PDO::PARAM_INT);
        $req->bindValue(':PREF_ENS', $PREF_ENS, PDO::PARAM_INT);
                
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdatePreferer($PREF_CRE, $PREF_ENS,$PREF_EDT){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `preferer` SET PREF_CRE = :PREF_CRE, PREF_EDT = :PREF_EDT WHERE `preferer`.PREF_ENS=:PREF_ENS;");
$req->bindValue(':PREF_CRE', $PREF_CRE, PDO::PARAM_INT);
$req->bindValue(':PREF_ENS', $PREF_ENS, PDO::PARAM_INT);
$req->bindValue(':PREF_EDT', $PREF_EDT, PDO::PARAM_INT);        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getPropo(){
    $resultat = array();
    try{
        $cnx = connexionPDO();
        $req = $cnx->prepare("SELECT * FROM preferer, creneau, formation, stage where PREF_CRE = CRE_ID and STA_CRE = CRE_ID and FORM_CODE = STA_FORM");
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