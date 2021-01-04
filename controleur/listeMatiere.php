<?php

include_once "modele/bd.matiere.inc.php";


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeMatiere = getMatiere();


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des matières";
include "vue/entete.html.php";
include "vue/vueListeMatiere.php";

include "vue/pied.html.php";
?>