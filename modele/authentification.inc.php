<?php

include_once "bd.utilisateur.inc.php";

function login($Mail, $Mdp) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByMail($Mail);
    $mdpBD = $util["UTIL_MDP"]; 
/* echo "Mdp dans la bdd (crypté) : ".$util["UTIL_MDP"];
    echo "<br> Mail saisi : ".$Mail;
    echo "<br> Mdp saisi : ".$Mdp;

    echo "<br> admin : ".trim(crypt("admin",$mdpBD));
    echo "<br> enseignant : ".trim(crypt("enseignant",$mdpBD));
    echo "<br> etablissement : ".trim(crypt("etablissement",$mdpBD));*/  //Affichage des mots de passe cryptés
  
 
    if (trim($mdpBD) == trim(crypt($Mdp, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["UTIL_MAIL"] = $Mail;
        $_SESSION["UTIL_MDP"] = $mdpBD;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["UTIL_MAIL"]);
    unset($_SESSION["UTIL_MDP"]);
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

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
   // header('Content-Type:text/plain');


    // test de connexion
    login("test@admin.fr", "admin");
    if (isLoggedOn()) {
        echo "logged";
    } else {
        echo "not logged";
    }

    // deconnexion
    logout();

}
?>