<?php

include_once "modele/bd.creneau.inc.php";


$result=getCreneauById($_GET['id']);

$date=$result['CRE_DATE'];
$heureDeb=$result['CRE_HEUREDEB'];
$heureFin=$result['CRE_HEUREFIN'];
$salle=$result['CRE_SALLE'];






$titre = "Modification du creneau";
include "vue/entete.html.php";
include "vue/vueModifCreneau.php";
include "vue/pied.html.php";
?>