<center><h2 id="titre">Inscription des élèves à une formation</h2></center>
	<body>
    <center><h2>Formulaire d'ajout </h2></center>

<p></p>

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

	<p><label for="INS_STA"> Formation : </label>
		<select name="INS_STA">
			<?php
				for($i=0;$i<sizeof($stage);$i++){ ?> 
					<option value= <?= $stage[$i]['STA_ID'];?> > 
						<?= getFormationById($stage[$i]['STA_FORM'])['FORM_LIBELLE'], ", ", getMatiereById($stage[$i]['STA_MAT'])['MAT_LIBELLE'], " - ", getCreneauById($stage[$i]['STA_CRE'])['CRE_HEUREDEB']; ?> </option> 
			<?php } ?>
		</select>
	</p></td></tr></table><br>
	<input type="submit" value="valider"/>
	<input type="reset"/></center>
</form>

 