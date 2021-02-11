<?php
include_once "bd.inc.php";
   
function getEleveById($ELE_ID) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from eleve where ELE_ID=:ELE_ID");
        $req->bindValue(':ELE_ID', $ELE_ID, PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getEleveByIdByEtab($ELE_ID) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from eleve where ELE_ID=:ELE_ID and ELE_ETA = :uti_eta");
        $req->bindValue(':ELE_ID', $ELE_ID, PDO::PARAM_INT);
        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getEleve() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from eleve, etablissement where ELE_ETA=ETA_ID and ETA_ID=:uti_eta order by ELE_NOM ASC,ELE_PRENOM ASC,ELE_CLASSE ASC ");
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
//admin
function getEleve3() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from eleve");
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
function getEleveByEtab() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from eleve where ELE_ETA =:uti_eta");
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
   
   function getAddEleve($ELE_ETA, $ELE_NOM, $ELE_PRENOM, $ELE_DATENAISS, $ELE_CLASSE, $ELE_MAIL) {
    $resultat = -1;

    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare( "insert into eleve (ELE_ETA,ELE_NOM,ELE_PRENOM,ELE_DATENAISS,ELE_CLASSE,ELE_MAIL ) values(:uti_eta,:ELE_NOM,:ELE_PRENOM,:ELE_DATENAISS,:ELE_CLASSE,:ELE_MAIL)");

        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);
        $req->bindValue(':ELE_NOM', $ELE_NOM, PDO::PARAM_STR);
        $req->bindValue(':ELE_PRENOM', $ELE_PRENOM, PDO::PARAM_STR);
        $req->bindValue(':ELE_DATENAISS', $ELE_DATENAISS, PDO::PARAM_STR);
        $req->bindValue(':ELE_CLASSE', $ELE_CLASSE, PDO::PARAM_STR);
        $req->bindValue(':ELE_MAIL', $ELE_MAIL, PDO::PARAM_STR);

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getDelEleve($ELE_ID) {
    $resultat = -1;
    try {
        $cnx = connexionPDO();

        $req = $cnx->prepare("delete from eleve where ELE_ID=:ELE_ID");
        $req->bindValue(':ELE_ID', $ELE_ID, PDO::PARAM_INT);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getUpdateEleve($ELE_ETA, $ELE_NOM, $ELE_PRENOM, $ELE_DATENAISS, $ELE_CLASSE, $ELE_MAIL,$ELE_ID){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `eleve` SET ELE_ETA = :ELE_ETA,ELE_NOM = :ELE_NOM, ELE_PRENOM = :ELE_PRENOM,ELE_DATENAISS = :ELE_DATENAISS, ELE_CLASSE = :ELE_CLASSE,ELE_MAIL = :ELE_MAIL  WHERE `eleve`.ELE_ID=:ELE_ID;");
        
        $req->bindValue(':ELE_ID', $ELE_ID, PDO::PARAM_INT);
        $req->bindValue(':ELE_ETA', $ELE_ETA, PDO::PARAM_INT);
        $req->bindValue(':ELE_NOM', $ELE_NOM, PDO::PARAM_STR);
        $req->bindValue(':ELE_PRENOM', $ELE_PRENOM, PDO::PARAM_STR);
        $req->bindValue(':ELE_DATENAISS', $ELE_DATENAISS, PDO::PARAM_STR);
        $req->bindValue(':ELE_CLASSE', $ELE_CLASSE, PDO::PARAM_STR);
        $req->bindValue(':ELE_MAIL', $ELE_MAIL, PDO::PARAM_STR);
        

        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

function getEleveIdByInfo($ELE_NOM,$ELE_PRENOM,$ELE_CLASSE) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select ELE_ID from eleve where ELE_NOM=:ELE_NOM AND ELE_PRENOM=:ELE_PRENOM AND ELE_CLASSE=:ELE_CLASSE");
        $req->bindValue(':ELE_NOM', $ELE_NOM, PDO::PARAM_STR);
        $req->bindValue(':ELE_PRENOM', $ELE_PRENOM, PDO::PARAM_STR);
        $req->bindValue(':ELE_CLASSE', $ELE_CLASSE, PDO::PARAM_STR);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['ELE_ID'];
}

function getEleveIdByInfo2($ELE_NOM,$ELE_PRENOM,$ELE_CLASSE,$ELE_ETA) {
    
    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select ELE_ID from eleve, etablissement where ELE_NOM=:ELE_NOM AND ELE_PRENOM=:ELE_PRENOM AND ELE_CLASSE=:ELE_CLASSE AND ELE_ETA=ETA_ID and ETA_ID=:uti_eta ");
        $req->bindValue(':ELE_NOM', $ELE_NOM, PDO::PARAM_STR);
        $req->bindValue(':ELE_PRENOM', $ELE_PRENOM, PDO::PARAM_STR);
        $req->bindValue(':ELE_CLASSE', $ELE_CLASSE, PDO::PARAM_STR);
        $req->bindValue(':uti_eta', $_SESSION["UTIL_ETA"], PDO::PARAM_INT);

        $req->execute();

        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat['ELE_ID'];
}


function getEleve2() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from eleve, etablissement group by ELE_ID order by ELE_ETA");
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