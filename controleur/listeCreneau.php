<?php

include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";

// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeCreneau = getListeCreneau();
//$result=getCreneauByForm($listeCreneau[$i]["FORM_CODE"]);
// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des creneaux";
include "vue/entete.html.php";
include "vue/vueListeCreneau.php";
include "vue/pied.html.php";
?>