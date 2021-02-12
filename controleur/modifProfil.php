<?php


include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.utilisateur.inc.php";
include_once "modele/bd.etablissement.inc.php";


$infoEta =getEtablissementById($_SESSION["UTIL_ETA"]);



$titre = "Modification du profil";
include "vue/entete.html.php";
include "vue/vueModifProfil.php";
include "vue/pied.html.php";
?>