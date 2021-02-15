<?php



include_once "modele/bd.utilisateur.inc.php";
include_once "modele/bd.etablissement.inc.php";


$infoEta =getEtablissementById($_SESSION["UTIL_ETA"]);
$nom = $infoEta['ETA_NOM'];
$adresse = $infoEta['ETA_ADRESSE'];
$cp = $infoEta['ETA_CP'];
$ville = $infoEta['ETA_VILLE'];
$mail = $infoEta['ETA_MAIL'];
$provnom = $infoEta['ETA_PROVNOM'];
$provprenom = $infoEta['ETA_PROVPRENOM'];
$tel = $infoEta['ETA_TEL'];
$secu = $infoEta['ETA_SECU'];




$titre = "Modification du profil";
include "vue/entete.html.php";
include "vue/vueModifProfilEns.php";
include "vue/pied.html.php";
?>