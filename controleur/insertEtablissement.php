<?php


include_once "modele/bd.etablissement.inc.php";
$ETA_NOM=$_POST['ETA_NOM'];
$ETA_VILLE=$_POST['ETA_VILLE'];
$ETA_ADRESSE=$_POST['ETA_ADRESSE'];
$ETA_CP=$_POST['ETA_CP'];
$ETA_MAIL=$_POST['ETA_MAIL'];
$ETA_PROVCIVIL=$_POST['ETA_PROVCIVIL'];
$ETA_PROVNOM=$_POST['ETA_PROVNOM'];
$ETA_PROVPRENOM=$_POST['ETA_PROVPRENOM'];
$ETA_TEL=$_POST['ETA_TEL'];
$ETA_SECU=$_POST['ETA_SECU'];
$ETA_NOMSECU=$_POST['ETA_NOMSECU'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddEtablissement($ETA_NOM, $ETA_VILLE, $ETA_ADRESSE, $ETA_CP, $ETA_MAIL, $ETA_PROVCIVIL, $ETA_PROVNOM, $ETA_PROVPRENOM, $ETA_TEL, $ETA_SECU, $ETA_NOMSECU);

addUtiEtablissement($ETA_MAIL, $ETA_PROVNOM);
// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees

$titre = "Liste des établissements";
include "vue/entete.html.php";
include "vue/vueInsertEtablissement.php";
include "vue/pied.html.php";
?>