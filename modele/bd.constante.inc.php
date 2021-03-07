<?php
include_once "bd.inc.php";
   
function getConstante() {
    $resultat = array();

    try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("select * from constante");
        $req->execute();

         $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


function getUpdateConstante($CON_PRIXREPAS,$CON_NOMDDFPT, $CON_PRENOMDDFPT){
    $resultat = -1;
    try {
$cnx = connexionPDO();
$req = $cnx->prepare("UPDATE `constante` SET CON_PRIXREPAS =:CON_PRIXREPAS , CON_NOMDDFPT = :CON_NOMDDFPT, CON_PRENOMDDFPT = :CON_PRENOMDDFPT  WHERE `constante`.CON_ID=1");
        
        
        
        $req->bindValue(':CON_PRIXREPAS', $CON_PRIXREPAS, PDO::PARAM_STR);
        $req->bindValue(':CON_NOMDDFPT', $CON_NOMDDFPT, PDO::PARAM_STR);
        $req->bindValue(':CON_PRENOMDDFPT', $CON_PRENOMDDFPT, PDO::PARAM_STR);
        
        $resultat = $req->execute();
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}


?>