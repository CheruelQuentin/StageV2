<?php



include_once "modele/bd.preferer.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.enseignant.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listePreferer = getPreferer();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des créneaux  que préfere les enseignants";
include "vue/entete.html.php";
include "vue/vueListePreferer.php";
include "vue/pied.html.php";
?>