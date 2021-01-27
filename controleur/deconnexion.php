<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){

}
include_once "modele/authentification.inc.php";

// recuperation des donnees GET, POST, et SESSION

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

// traitement si necessaire des donnees recuperees
logout();

                

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "authentification";
include "vue/entete.html.php";
include "vue/vueAuthentification.php";
include "vue/pied.html.php";


?>