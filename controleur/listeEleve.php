<?php

include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.etablissement.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeEleve = getEleve();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des inscrits";
include "vue/entete.html.php";
include "vue/vueListeEleve.php";
include "vue/pied.html.php";
?>