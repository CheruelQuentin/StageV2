<?php


include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.formation.inc.php";
$enseignant=getEnseignant(); 
$matiere=getMatiere(); 
$formation=getFormation();
$titre = "Ajout creneau";

include "vue/entete.html.php";
include "vue/vueAddCreneauAdmin.php";
include "vue/pied.html.php";
?>