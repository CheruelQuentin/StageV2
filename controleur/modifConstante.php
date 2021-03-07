<?php

include_once "modele/bd.constante.inc.php";


$result=getConstante();

$prix=$result['CON_PRIXREPAS'];
$nom=$result['CON_NOMDDFPT'];
$prenom=$result['CON_PRENOMDDFPT'];

$titre = "Modification des constantes";
include "vue/entete.html.php";
include "vue/vueModifConstante.php";
include "vue/pied.html.php";
?>