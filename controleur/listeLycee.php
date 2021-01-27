<?php



include_once "modele/bd.lycee.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeLycee = getLycee();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des lycées";
include "vue/entete.html.php";
include "vue/vueListeLycee.php";
include "vue/pied.html.php";
?>