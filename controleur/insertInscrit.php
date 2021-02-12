<?php


include_once "modele/bd.inscrire.inc.php";

$INS_ELE=htmlspecialchars($_POST['INS_ELE']);

for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
}
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if(getAddInscrire($INS_ELE, $INS_STA)){
header('Location: ./?action=listeInscription');
  	exit();
}


$titre = "Liste des insrits";
include "vue/entete.html.php";
include "vue/vueInsertInscrire.php";
include "vue/pied.html.php";
?>