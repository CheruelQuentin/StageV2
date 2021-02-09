<center><h5><?php echo $titre ?></h5></center>
	<body>

    <h2>Formulaire d'ajout </h2>

<p></p>
<?php  $enseignant=getEnseignant(); $matiere=getMatiere(); ?>
 <form method="post" action="./?action=insertEnsr">

	<p><label for="ENSR_MAT"> Matière : </label> 
			<select name="ENSR_MAT">
			<?php
				for($i=0;$i<sizeof($matiere);$i++){ ?> 
					<option value= <?= $matiere[$i]['MAT_CODE'];?> > 
						<?= $matiere[$i]['MAT_LIBELLE']; ?> </option> 
			<?php } ?>
		</select>
	</p>
	<p><label for="ENSR_ENS"> Enseignant : </label> 
		<select name="ENSR_ENS">
			<?php
				for($i=0;$i<sizeof($enseignant);$i++){ ?> 
					<option value= <?= $enseignant[$i]['ENS_ID'];?> > 
						<?= $enseignant[$i]['ENS_NOM'], " ", $enseignant[$i]['ENS_PRENOM']; ?> </option> 
			<?php } ?>
		</select></p><br>
			        <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>