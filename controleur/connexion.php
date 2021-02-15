<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){

}
include_once "modele/authentification.inc.php";


// recuperation des donnees GET, POST, et SESSION
if (htmlspecialchars(isset($_POST["Mail"])) && htmlspecialchars(isset($_POST["Mdp"]))){
    $Mail=$_POST["Mail"];
    $Mdp=$_POST["Mdp"];
    
// traitement si necessaire des donnees recuperees
login($Mail,$Mdp);

}
else
{
    $Mail="";
    $Mdp="";
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 





if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    include "controleur/profil.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    $titre = "authentification";
    include "vue/entete.html.php";
    include "vue/vueAuthentification.php";
    include "vue/pied.html.php";
}

?>