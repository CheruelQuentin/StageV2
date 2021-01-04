<center><h5><?php echo $titre ?></h5></center>
	<body>
    <h2>Formulaire d'ajout </h2>

<p></p>

<?php $eleves=getEleve(); $formations=getFormation();?>

 <form method="post" action="./?action=insertIns">

	<div class="ui-widget">
  <label for="eleves">Eleve : </label>
  <input id="eleves" name="INS_ELE">
	</div>

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

 