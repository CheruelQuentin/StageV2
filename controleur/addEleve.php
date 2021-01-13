<?php


include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "java/autocomplete.php";

$titre = "Ajout eleve";
$stage=getStage();
include "vue/entete.html.php";
include "vue/vueAddEleve.php";
include "vue/pied.html.php";
?>