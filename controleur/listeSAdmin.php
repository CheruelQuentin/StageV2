<?php

include_once "modele/bd.utilisateur.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeAdmin = getAdmin();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des inscrits";
include "vue/entete.html.php";
include "vue/vueListeSAdmin.php";
include "vue/pied.html.php";
?>