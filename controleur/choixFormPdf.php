<?php


include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";

$titre = "Choix Formation PDF";

$stage=getStage();
include "vue/entete.html.php";
include "vue/vueChoixPdf.php";
include "vue/pied.html.php";
?>