<?php


include_once "modele/bd.formation.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "java/autocomplete.php";
include_once "modele/authentification.inc.php";

$titre = "Ajout formation";
include "vue/entete.html.php";
include "vue/vueAddFormation.php";
include "vue/pied.html.php";
?>