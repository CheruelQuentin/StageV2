<?php

include_once "modele/bd.formation.inc.php";

$formation=getFormationById($_GET['id']);
$libelle=$formation['FORM_LIBELLE'];

$titre = "Modification du Stage";
include "vue/entete.html.php";
include "vue/vueModifStage.php";
include "vue/pied.html.php";
?>