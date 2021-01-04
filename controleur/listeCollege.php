<?php

include_once "modele/bd.college.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeCollege = getCollege();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des collèges";
include "vue/entete.html.php";
include "vue/vueListeCollege.php";
include "vue/pied.html.php";
?>