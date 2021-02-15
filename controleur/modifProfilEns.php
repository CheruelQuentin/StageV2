<?php


include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.utilisateur.inc.php";



$infoEns =getEnseignantById($_SESSION["UTIL_ENS"]);
$nom = $infoEns['ENS_NOM'];
$prenom = $infoEns['ENS_PRENOM'];
$mail = $infoEns['ENS_MAIL'];
$tel = $infoEns['ENS_TEL'];
$datenaissance = $infoEns['ENS_DATENAISS'];





$titre = "Modification du profil";
include "vue/entete.html.php";
include "vue/vueModifProfilEns.php";
include "vue/pied.html.php";
?>