<?php

include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.stage.inc.php";

$listeFormation = getFormation();


$titre = "Modification de l'inscription";
include "vue/entete.html.php";
include "vue/vueModifInscrire.php";
include "vue/pied.html.php";
?>