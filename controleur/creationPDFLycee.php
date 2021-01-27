<?php


include_once "../modele/bd.etablissement.inc.php";
include_once "../modele/bd.eleve.inc.php";
include_once "../modele/bd.utilisateur.inc.php";
include_once "../modele/bd.inscrire.inc.php";
include_once "../modele/pdfLycee.inc.php";
include_once "../modele/bd.formation.inc.php";
include_once "../modele/bd.creneau.inc.php";
include_once "../modele/bd.stage.inc.php";

$etablissement = getEtablissementByUtilMail();

$ETA_NOM=$etablissement['ETA_NOM'];
$ETA_PROVNOM=$etablissement['ETA_PROVNOM'];
$ETA_SECU=$etablissement['ETA_SECU'];
$ETA_NOMSECU=$etablissement['ETA_NOMSECU'];
$ETA_VILLE=$etablissement['ETA_VILLE'];



$STA_ID =$_POST['STA_ID'];
$Miam=getMiam($STA_ID);
require_once "../fpdf182/fpdf.php";
include_once "../vue/vuePdfLycee.php";

?>