<?php


include_once "modele/bd.inscrire.inc.php";

$INS_ELE=htmlspecialchars($_POST['INS_ELE']);




for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
}
 
if(getAddInscrire($INS_ELE, $INS_STA)){
header('Location: ./?action=listeInscription');
  	exit();
}


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des insrits";
include "vue/entete.html.php";
include "vue/vueInsertInscrire2.php";
include "vue/pied.html.php";
?>