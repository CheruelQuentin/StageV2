<?php


include_once "modele/bd.utilisateur.inc.php";


$UTIL_MAIL=$_POST['UTIL_MAIL'];

$UTIL_MDP2=$_POST['UTIL_MDP2'];

getUpdateUtiMdp($UTIL_MAIL,$UTIL_MDP);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 




// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Nouveau mot de passe";
include "vue/entete.html.php";
include "vue/vueUpdateMdp.php";
include "vue/pied.html.php";
?>