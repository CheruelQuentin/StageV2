<?php


include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";


// recuperation des donnees GET, POST, et SESSION
;
$listeCreneau = getListeCreneau();
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeInscrire = getInscrireListe($listeCreneau);

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des inscrits";
include "vue/entete.html.php";
include "vue/vueListeInscrire.php";
include "vue/pied.html.php";
?>