<?php

include_once "modele/bd.matiere.inc.php";

$matiere=getMatiereById($_GET['id']);
$libelle=$matiere['MAT_LIBELLE'];

$titre = "Modification de la matière";
include "vue/entete.html.php";
include "vue/vueModifMatiere.php";
include "vue/pied.html.php";
?>