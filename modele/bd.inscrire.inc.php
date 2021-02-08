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

    
    function getInscrireByStage($INS_STA) {

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from inscrire where INS_STA=:INS_STA");
        $req->bindValue(':INS_STA', $INS_STA, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getAddInscrire($INS_ELE, $INS_STA) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("insert into inscrire (INS_ELE,INS_STA) values(:INS_ELE,:INS_STA)");

        $req->bindValue(':INS_ELE', $INS_ELE, PDO::PARAM_INT);
        $req->bindValue(':INS_STA', $INS_STA, PDO::PARAM_INT);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getDelInscrire($INS_ELE, $INS_STA) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from inscrire where INS_ELE=:INS_ELE AND INS_STA=:INS_STA");
        $req->bindValue(':INS_ELE', $INS_ELE, PDO::PARAM_INT);
        $req->bindValue(':INS_STA', $INS_STA, PDO::PARAM_INT);
                
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateInscrire($INS_ELE, $INS_STA){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `inscrire` SET INS_STA = :INS_STA WHERE `inscrire`.INS_ELE=:INS_ELE;");
$req->bindValue(':INS_STA', $INS_STA, PDO::PARAM_INT);
$req->bindValue(':INS_ELE', $INS_ELE, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}
//etablissement
function getInscrireListe() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from inscrire, etablissement, eleve,stage,formation, enseignant, creneau where INS_ELE= ELE_ID and ELE_ETA=ETA_ID and ETA_ID=:uti_eta and INS_STA=STA_ID and STA_FORM=FORM_CODE and STA_ENS=ENS_ID and STA_CRE = CRE_ID ORDER BY CRE_DATE, FORM_CODE, ELE_NOM ");
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
//enseignant
function getInscrireListe2() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select *  from creneau, enseignant, eleve ,inscrire, stage, formation where STA_CRE = CRE_ID and STA_ID= INS_STA and INS_ELE=ELE_ID and STA_FORM = FORM_CODE and STA_ENS = ENS_ID and ENS_ID =:uti_ens ORDER BY STA_ID");
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
//admin
function getInscrireListe3() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from inscrire, eleve where INS_ELE= ELE_ID ");
        
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


function getInscrireByForm($FORM_CODE) {
    $resultat = array();
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select STA_ID,ELE_ID, CRE_SALLE,ELE_NOM,ELE_PRENOM,CRE_DATE,CRE_HEUREDEB,CRE_HEUREFIN,ELE_CLASSE 
            from formation, stage, creneau, eleve, inscrire 
where ELE_ID =INS_ELE 
AND INS_STA= STA_ID 
AND STA_FORM = FORM_CODE 
and STA_CRE = CRE_ID 
and FORM_CODE=:FORM_CODE 
AND ELE_ETA =:uti_eta");
        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
        $req->bindValue(':FORM_CODE', $FORM_CODE, PDO::PARAM_INT);

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