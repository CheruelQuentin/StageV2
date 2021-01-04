<?php


include_once "modele/bd.etablissement.inc.php";

$listeEtablissement=getEtablissementById($_GET['id']);
$nom=$listeEtablissement['ETA_NOM'];
$ville=$listeEtablissement['ETA_VILLE'];
$adresse=$listeEtablissement['ETA_ADRESSE'];
$CP=$listeEtablissement['ETA_CP'];
$mail=$listeEtablissement['ETA_MAIL'];
$provcivil=$listeEtablissement['ETA_PROVCIVIL'];
$provnom=$listeEtablissement['ETA_PROVNOM'];
$provprenom=$listeEtablissement['ETA_PROVPRENOM'];
$tel=$listeEtablissement['ETA_TEL'];

$titre = "Modification de l'etablissement";
include "vue/entete.html.php";
include "vue/vueModifEtablissement.php";
include "vue/pied.html.php";
?>