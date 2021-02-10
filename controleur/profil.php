<?php

include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "modele/bd.utilisateur.inc.php";
include_once "modele/bd.matiere.inc.php";
$listeInscrire = getInscrireListe();
$listeStage= getStage();
$listeInscrire2 = getInscrireListe2();
$ETA_NOM =getEtablissementById($_SESSION["UTIL_ETA"]);
$titre = "Profil";
include "vue/entete.html.php";
include "vue/vueProfil.php";
include "vue/pied.html.php";


?>