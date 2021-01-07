<?php

include_once "../modele/pdfCollege.inc.php";
include_once "../modele/bd.etablissement.inc.php";
include_once "../modele/bd.eleve.inc.php";
include_once "../modele/bd.utilisateur.inc.php";
include_once "../modele/bd.inscrire.inc.php";
include_once "../modele/pdfCollege.inc.php";

$etablissement = getEtablissementByUtilMail($_SESSION["UTIL_MAIL"]);

$ETA_NOM=$etablissement['ETA_NOM'];
$ETA_PROVNOM=$etablissement['ETA_PROVNOM'];
$ETA_SECU=$etablissement['ETA_SECU'];
$ETA_NOMSECU=$etablissement['ETA_NOMSECU'];
$ETA_VILLE=$etablissement['ETA_VILLE'];

$Miam=getMiam2()['COUNT(INS_ELE)'];

require_once "../fpdf182/fpdf.php";
include_once "../vue/vuePdfLycee.php";

?>