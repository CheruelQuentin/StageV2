<?php


include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.creneau.inc.php";

$listeEleve=getEleveById($_GET['id']);
$nom=$listeEleve['ELE_NOM'];
$prenom=$listeEleve['ELE_PRENOM'];
$dateN=$listeEleve['ELE_DATENAISS'];
$classe=$listeEleve['ELE_CLASSE'];
$mail=$listeEleve['ELE_MAIL'];
$etablissement=getEtablissement(); 
$stage=getStage();
$etaById=getEtablissementById(getEleveById($_GET['id'])['ELE_ETA']);
$titre = "Modification Eleve";
include "vue/entete.html.php";
include "vue/vueModifEleve2.php";
include "vue/pied.html.php";
?>