<?php

include_once "modele/bd.stage.inc.php";

$stage=getStageById($_GET['id']);
$libelle=$stage['STA_LIBELLE'];

$titre = "Modification du Stage";
include "vue/entete.html.php";
include "vue/vueModifStage.php";
include "vue/pied.html.php";
?>