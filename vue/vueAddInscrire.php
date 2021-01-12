<center><h2 id="titre">Inscription des élèves à une formation</h2></center>
	<body>
    <center><h2>Formulaire d'ajout </h2></center>

<p></p>

<?php $eleves=getEleve(); $formations=getFormation();?>

 <form method="post" action="./?action=insertIns">

<center>
	<table><tr><td>
  <p><label for="INS_ELE">Eleve : </label>
  <select name="INS_ELE">
			<?php
				for($i=0;$i<sizeof($eleves);$i++){ ?> 
					<option value= <?= $eleves[$i]['ELE_ID'];?> > 
						<?= getEleveById($eleves[$i]['ELE_ID'])['ELE_NOM'], " , ", getEleveById($eleves[$i]['ELE_ID'])['ELE_PRENOM'];?>
					</option> 
			<?php } ?>
		</select>
</p>

	<p><label for="INS_FORM"> Formation : </label>
		<select name="INS_FORM">
			<?php
				for($i=0;$i<sizeof($formations);$i++){ ?> 
					<option value= <?= $formations[$i]['FORM_ID'];?> > 
						<?= getStageById($formations[$i]['FORM_STA'])['STA_LIBELLE'], ", ", getMatiereById($formations[$i]['FORM_MAT'])['MAT_LIBELLE'], " - ", getCreneauById($formations[$i]['FORM_CRE'])['CRE_HEUREDEB']; ?> </option> 
			<?php } ?>
		</select>
	</p></td></tr></table><br>
	<input type="submit" value="valider"/>
	<input type="reset"/></center>
</form>

 