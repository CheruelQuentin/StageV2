<?php


include_once "modele/bd.etablissement.inc.php";
$ETA_NOM=htmlspecialchars($_POST['ETA_NOM']);
$ETA_VILLE=htmlspecialchars($_POST['ETA_VILLE']);
$ETA_ADRESSE=htmlspecialchars($_POST['ETA_ADRESSE']);
$ETA_CP=htmlspecialchars($_POST['ETA_CP']);
$ETA_MAIL=htmlspecialchars($_POST['ETA_MAIL']);
$ETA_PROVCIVIL=htmlspecialchars($_POST['ETA_PROVCIVIL']);
$ETA_PROVNOM=htmlspecialchars($_POST['ETA_PROVNOM']);
$ETA_PROVPRENOM=htmlspecialchars($_POST['ETA_PROVPRENOM']);
$ETA_TEL=htmlspecialchars($_POST['ETA_TEL']);
$ETA_SECU=htmlspecialchars($_POST['ETA_SECU']);
$ETA_NOMSECU=htmlspecialchars($_POST['ETA_NOMSECU']);
$ETA_CATEG=htmlspecialchars($_POST['ETA_CATEG']);
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getAddEtablissement($ETA_NOM, $ETA_VILLE, $ETA_ADRESSE, $ETA_CP, $ETA_MAIL, $ETA_PROVCIVIL, $ETA_PROVNOM, $ETA_PROVPRENOM, $ETA_TEL, $ETA_SECU, $ETA_NOMSECU,$ETA_CATEG)){

$ETA_ID = getEtablissementIdByInfo($ETA_NOM,$ETA_VILLE,$ETA_CP,$ETA_MAIL);

addUtiEtablissement($ETA_MAIL, $ETA_PROVNOM,$ETA_ID);
// traitement si necessaire des donnees recuperees
}
// appel du script de vue qui permet de gerer l'affichage des donnees

$titre = "Liste des établissements";
include "vue/entete.html.php";
include "vue/vueInsertEtablissement.php";
include "vue/pied.html.php";
?>