<?php


include_once "bd.utilisateur.inc.php";

function login($Mail, $Mdp) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByMail($Mail);
    $mdpBD = $util["UTIL_MDP"]; 

   $eta= getEtablissementByMail($Mail);
    $etaId = $eta["ETA_ID"]; 
    
   $ens= getEnseignantByMail($Mail);
    $ensId = $ens["ENS_ID"];  
 
    if (trim($mdpBD) == trim(crypt($Mdp, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["UTIL_MAIL"] = $Mail;
        $_SESSION["UTIL_MDP"] = $mdpBD;
        $_SESSION["UTIL_ETA"]=$etaId;
        $_SESSION["UTIL_ENS"]=$ensId;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["UTIL_MAIL"]);
    unset($_SESSION["UTIL_MDP"]);
    session_destroy();
}

function getMailULoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["UTIL_MAIL"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["UTIL_MAIL"])) {
        $util = getUtilisateurByMail($_SESSION["UTIL_MAIL"]);
        if ($util["UTIL_MAIL"] == $_SESSION["UTIL_MAIL"] && $util["UTIL_MDP"] == $_SESSION["UTIL_MDP"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}

?>