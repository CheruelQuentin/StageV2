<?php

include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.etablissement.inc.php";

$listeInscrire = getInscrireListe();



$titre = "Profil";
include "vue/entete.html.php";
include "vue/vueProfil.php";
include "vue/pied.html.php";


?>