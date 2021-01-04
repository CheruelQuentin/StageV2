<?php


include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.eleve.inc.php";

$titre = "Ajout inscrit";
include "vue/entete.html.php";
include "vue/vueAddInscrire.php";
include "vue/pied.html.php";
?>