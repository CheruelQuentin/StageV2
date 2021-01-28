	<body>
	<br>
	<center><h2 id="titre">Gestion des Créneaux</h2></center>
	<br>
    <center><h2>Formulaire d'ajout </h2>
<script src="js/verification.js"> </script>
<p></p>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=insertCre">

	<table><tr><td>

	<p><label for="CRE_DATE"> Date </label> <input id="CRE_DATE" type="date" name="CRE_DATE" size="50px" maxlength="20"  class= "instyle" /></p>
	<p><label for="CRE_HEUREDEB"> Heure de début </label> <input id="CRE_HEUREDEB" type="time" name="CRE_HEUREDEB" size="50px" maxlength="20" class= "instyle"/></p>
	<p><label for="CRE_SALLE"> Salle </label> <input id="CRE_SALLE" type="text" name="CRE_SALLE" required pattern="[A-Z]{1}[0-9]{3}" title="Une majuscule et trois chiffres" size="50px" maxlength="5"/></p>
	<p><label for="CRE_HEUREFIN"> Heure de fin </label> <input id="CRE_HEUREFIN" type="time" name="CRE_HEUREFIN" size="50px" maxlength="20"  /></p>

	<div class="ui-widget">
	<p><label for="STA_ELEMIN"> Nombre d'élève min </label> <input type="number" id="ele_min" name="STA_ELEMIN" min="1" max="3"></p>
	<br>
	<p><label for="STA_ELEMAX"> Nombre d'élève max </label> <input type="number" id="ele_max" name="STA_ELEMAX" min="3" max="40"></p>
	</div>



<p><label for="CRE_MAT"> Matière : </label> 
			<select  required name="CRE_MAT">
			<?php
				for($i=0;$i<sizeof($matiere);$i++){ ?> 
					<option value= <?= $matiere[$i]['MAT_CODE'];?> > 
						<?= $matiere[$i]['MAT_LIBELLE']; ?> </option> 
			<?php } ?>
		</select>
	</p><br>
<p>Veuillez sélectionner un stage </p>
	<div id="choixForm">
		<fieldset class="scheduler-border">    
        	<legend class="scheduler-border">Stage</legend>           
        <?php
				for($i=0;$i<sizeof($formation);$i++){ ?> 
					<input required type="radio"name="choixForm[]"value=<?= $formation[$i]['FORM_CODE'];?>
					><?= getFormationById($formation[$i]['FORM_CODE'])['FORM_LIBELLE'];?>
					<br> 
					
			<?php } ?>          
    	</fieldset>
	</div>
	<br>


	</td></tr></table>
	<br>


			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>
