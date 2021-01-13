<?php

include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.stage.inc.php";

$listeStage = getStage();


$titre = "Modification de l'inscription";
include "vue/entete.html.php";
include "vue/vueModifInscrire2.php";
include "vue/pied.html.php";
?>