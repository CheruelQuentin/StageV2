<center><h5><?php echo $titre ?></h5></center>
	<body>
    <h2>Formulaire d'ajout </h2>

<p></p>

<?php $eleves=getEleve(); $formations=getFormation();?>

 <form method="post" action="./?action=insertIns">


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
	</p>
	<input type="submit" value="valider"/>
	<input type="reset"/>
</form>

 