<?php


include_once "modele/bd.travailler.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "modele/bd.enseignant.inc.php";

$titre = "Ajout travail";
include "vue/entete.html.php";
include "vue/vueAddTravailler.php";
include "vue/pied.html.php";
?>