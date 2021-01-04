<center><h5><?php echo $titre ?></h5></center>
	<body>
    <h2>Formulaire d'ajout </h2>

<p></p>
<?php $etablissement=getEtablissement(); $enseignant=getEnseignant(); ?>
 <form method="post" action="./?action=insertTra">

	<p><label for="TRA_ENS"> Enseignant : </label> 
		<select name="TRA_ENS">
			<?php
				for($i=0;$i<sizeof($enseignant);$i++){ ?> 
					<option value= <?= $enseignant[$i]['ENS_ID'];?> > 
						<?= $enseignant[$i]['ENS_NOM'], " ", $enseignant[$i]['ENS_PRENOM']; ?> </option> 
			<?php } ?>
		</select></p>
	<p><label for="TRA_ETA"> Etablissement : </label>
				<select name="TRA_ETA">
			<?php
				for($i=0;$i<sizeof($etablissement);$i++){ ?> 
					<option value= <?= $etablissement[$i]['ETA_ID'];?> > 
						<?= $etablissement[$i]['ETA_NOM'], ", ", $etablissement[$i]['ETA_VILLE']; ?> </option> 
			<?php } ?>
		</select></p>
			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>