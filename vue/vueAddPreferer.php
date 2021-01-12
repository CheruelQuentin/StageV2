<center><h5><?php echo $titre ?></h5></center>
	<body>
    <h2>Formulaire d'ajout </h2>

<p></p>
<?php $creneau=getCreneau(); $enseignant=getEnseignant();?>
 <form method="post" action="./?action=insertPref">

	<label for="PREF_CRE"> Créneau Préféré </label> : 
		<select name="PREF_CRE">
			<?php
				for($i=0;$i<sizeof($creneau);$i++){ ?> 
					<option value= <?= $creneau[$i]['CRE_ID'];?> > 
						<?= $creneau[$i]['CRE_DATE'], ", ", $creneau[$i]['CRE_SALLE'], ", ", $creneau[$i]['CRE_HEUREDEB']; ?> </option> 
			<?php } ?>
		</select>
	<label for="PREF_ENS"> Préférence de l'Enseignant : </label> 
	<select name="PREF_ENS">
			<?php
				for($i=0;$i<sizeof($enseignant);$i++){ ?> 
					<option value= <?= $enseignant[$i]['ENS_ID'];?> > 
						<?= $enseignant[$i]['ENS_NOM'], " ", $enseignant[$i]['ENS_PRENOM']; ?> </option> 
			<?php } ?>
		</select>
	
	<p><label for="PREF_EDT"> Conflit avec l'emploi du temps : </label> 
		<select name="PREF_EDT">
			<option value=0>Pas de conflit</option>
			<option value=1>Conflit</option>
		</select></p>

<br>
			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>