<?php

include_once "modele/bd.enseigner.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeEnseigner = getEnseigner();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des Prof et de la matiere qu'ils enseignent";
include "vue/entete.html.php";
include "vue/vueListeEnseigner.php";
include "vue/pied.html.php";
?>