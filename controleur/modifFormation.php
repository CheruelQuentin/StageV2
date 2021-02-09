<?php


include_once "modele/bd.formation.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.enseignant.inc.php";

$listeStage=getStageById($_GET['id']);
$min=$listeStage['STA_ELEMIN'];
$max=$listeStage['STA_ELEMAX'];
$creneau=$listeStage['STA_CRE'];

$titre = "Modification de la formation";
include "vue/entete.html.php";
include "vue/vueModifFormation.php";
include "vue/pied.html.php";
?>