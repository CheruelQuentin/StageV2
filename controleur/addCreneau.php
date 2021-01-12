<?php


include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.stage.inc.php";
$matiere=getMatiere(); 
$stage=getStage(); 
$titre = "Ajout creneau";
include "vue/entete.html.php";
include "vue/vueAddCreneau.php";
include "vue/pied.html.php";
?>