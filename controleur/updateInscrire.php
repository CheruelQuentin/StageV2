<?php


include_once "modele/bd.inscrire.inc.php";


$INS_ELE=$_POST['INS_ELE'];
$info2 = getInscrireByEle($INS_ELE);
for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
$info3 = getInscrireByStage($INS_STA);
if($INS_ELE == $info2['INS_ELE']){
	if($INS_STA == $info3['INS_STA']){
header('Refresh: 1;./?action=listeInscription3');
?><script>alert("Élève déjà inscrit");</script><?php
	}else{
	getUpdateInscrire($INS_ELE, $INS_STA);
	header('Location: ./?action=listeInscription3');
		 }
}else{
	getUpdateInscrire($INS_ELE, $INS_STA);
	header('Location: ./?action=listeInscription3');
	
}
}
?>