<?php

include_once "modele/bd.categeta.inc.php";
include_once "modele/bd.etablissement.inc.php";
$categeta = getCategEta();
$titre = "Ajout etablissement";
include "vue/entete.html.php";
include "vue/vueAddEtablissement.php";
include "vue/pied.html.php";
?>