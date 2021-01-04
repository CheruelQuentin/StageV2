<?php


include_once "modele/bd.enseignant.inc.php";

$listeEnseignant=getEnseignantById($_GET['id']);
$nom=$listeEnseignant['ENS_NOM'];
$prenom=$listeEnseignant['ENS_PRENOM'];
$mail=$listeEnseignant['ENS_MAIL'];
$tel=$listeEnseignant['ENS_TEL'];
$dateN=$listeEnseignant['ENS_DATENAISS'];

$titre = "Modification de l'enseignant";
include "vue/entete.html.php";
include "vue/vueModifEnseignant.php";
include "vue/pied.html.php";
?>