<?php

include_once "bd.inc.php";

function getCreneauById($CRE_ID) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from creneau where CRE_ID=:CRE_ID");
        $req->bindValue(':CRE_ID', $CRE_ID, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getCreneau() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from creneau order by CRE_DATE DESC");
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
    

function getAddCreaneau($CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare( "insert into creneau (CRE_DATE,CRE_HEUREDEB,CRE_SALLE,CRE_HEUREFIN ) values(:CRE_DATE,:CRE_HEUREDEB,:CRE_SALLE,:CRE_HEUREFIN)");

        
        $req->bindValue(':CRE_DATE', $CRE_DATE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREDEB', $CRE_HEUREDEB, PDO::PARAM_STR);
        $req->bindValue(':CRE_SALLE', $CRE_SALLE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREFIN', $CRE_HEUREFIN, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getDelCreneau($CRE_ID) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from creneau where CRE_ID=:CRE_ID");
        $req->bindValue(':CRE_ID', $CRE_ID, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateCreneau($CRE_MAT, $CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN, $CRE_ID){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `creneau` SET CRE_MAT = :CRE_MAT,CRE_DATE = :CRE_DATE, CRE_HEUREDEB = :CRE_HEUREDEB,CRE_SALLE = :CRE_SALLE, CRE_HEUREFIN = :CRE_HEUREFIN  WHERE `creneau`.CRE_ID=:CRE_ID;");
        
        $req->bindValue(':CRE_ID', $CRE_ID, PDO::PARAM_INT);
        $req->bindValue(':CRE_MAT', $CRE_MAT, PDO::PARAM_INT);
        $req->bindValue(':CRE_DATE', $CRE_DATE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREDEB', $CRE_HEUREDEB, PDO::PARAM_STR);
        $req->bindValue(':CRE_SALLE', $CRE_SALLE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREFIN', $CRE_HEUREFIN, PDO::PARAM_STR);
        

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getCreneauIdByInfo($creneau) {

    $creneau=explode(" - ",$creneau);
    $CRE_DATE=$creneau[0];
    $CRE_SALLE=$creneau[1];
    $CRE_HEUREDEB=$creneau[2];
    $CRE_HEUREFIN=$creneau[3];

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select CRE_ID from creneau where CRE_DATE=:CRE_DATE AND CRE_SALLE=:CRE_SALLE AND CRE_HEUREDEB=:CRE_HEUREDEB AND CRE_HEUREFIN=:CRE_HEUREFIN");
        $req->bindValue(':CRE_DATE', $CRE_DATE, PDO::PARAM_STR);
        $req->bindValue(':CRE_SALLE', $CRE_SALLE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREDEB', $CRE_HEUREDEB, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREFIN', $CRE_HEUREFIN, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['CRE_ID'];
}

function getCreneauIdByInfo2($CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN) {


    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select CRE_ID from creneau where CRE_DATE=:CRE_DATE AND CRE_SALLE=:CRE_SALLE AND CRE_HEUREDEB=:CRE_HEUREDEB AND CRE_HEUREFIN=:CRE_HEUREFIN");
        $req->bindValue(':CRE_DATE', $CRE_DATE, PDO::PARAM_STR);
        $req->bindValue(':CRE_SALLE', $CRE_SALLE, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREDEB', $CRE_HEUREDEB, PDO::PARAM_STR);
        $req->bindValue(':CRE_HEUREFIN', $CRE_HEUREFIN, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['CRE_ID'];
}
?>