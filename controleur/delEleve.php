<?php

include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.inscrire.inc.php";
$ELE_INS=getInscrireByEle($_GET['id']);

for($i=0;$i<sizeof($ELE_INS);$i++){	//Suppression de toutes les formations suivies
	getDelInscrire($_GET['id'],$ELE_INS[$i]['INS_FORM']);
}

if(getDelEleve($_GET['id'])){
	header('Location: ./?action=listeEleve');
  	exit();
} else{
	echo "erreur.";
}
        ?>