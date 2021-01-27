<?php


include_once "modele/bd.travailler.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeTravailler = getTravailler();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des etablissement où travaille les enseignants";
include "vue/entete.html.php";
include "vue/vueListeTravailler.php";
include "vue/pied.html.php";
?>