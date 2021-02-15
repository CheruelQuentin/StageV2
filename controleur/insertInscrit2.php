<?php


include_once "modele/bd.inscrire.inc.php";

$INS_ELE=htmlspecialchars($_POST['INS_ELE']);

$info2 = getInscrireByEle($INS_ELE);


for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
$info3 = getInscrireByStage($INS_STA);
if($INS_ELE == $info2['INS_ELE'] &&  $INS_STA == $info3['INS_STA']){
header('Refresh: 1;./?action=addIns');
							?><script>alert("Élève déjà inscrit dans $INS_STA");</script><?php


}else{
		getAddInscrire($INS_ELE, $INS_STA);	
	header('Location: ./?action=listeInscriptionEns');
}
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 



$titre = "Liste des insrits";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>