	<body>
	<center><h2 id="titre">Gestion des Créneaux</h2></center>
    <center><h2>Formulaire d'ajout </h2>
<script src="js/verification.js"> </script>
<p></p>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=insertCre">

	<table><tr><td>

	<p><label for="CRE_DATE"> Date: </label> <input id="CRE_DATE" type="date" name="CRE_DATE" size="50px" maxlength="20"   /></p>
	<p><label for="CRE_HEUREDEB"> Heure de début: </label> <input id="CRE_HEUREDEB" type="time" name="CRE_HEUREDEB" size="50px" maxlength="20" /></p>
	<p><label for="CRE_SALLE"> Salle: </label> <input id="CRE_SALLE" type="text" name="CRE_SALLE" size="50px" maxlength="5"/></p>
	<p><label for="CRE_HEUREFIN"> Heure de fin: </label> <input id="CRE_HEUREFIN" type="time" name="CRE_HEUREFIN" size="50px" maxlength="20"  /></p>

	<div class="ui-widget">
	<p><label for="STA_ELEMIN"> Nombre d'élève min: </label> <input type="number" id="ele_min" name="STA_ELEMIN" min="1" max="40"></p>
	<br>
	<p><label for="STA_ELEMAX"> Nombre d'élève max: </label> <input type="number" id="ele_max" name="STA_ELEMAX" min="1" max="40"></p>
	</div>
<br>
	<div id="choixForm">

		<fieldset class="scheduler-border">    
        	<legend class="scheduler-border">Stage</legend>           
        <?php
				for($i=0;$i<sizeof($formation);$i++){ ?> 
					<input type="radio" name="choixForm[]" value=<?= $formation[$i]['FORM_CODE'];?>
					><?= getFormationById($formation[$i]['FORM_CODE'])['FORM_LIBELLE'];?>
					<br>
					
			<?php } ?>          
    	</fieldset>
	</div>
	<br>
	<div id="choixForm2">
		<fieldset class="scheduler-border">    
        	<legend class="scheduler-border">Matière</legend>           
        <?php
				for($i=0;$i<sizeof($matiere);$i++){ ?> 
					<input type="radio" name="choixForm2[]" value=<?= $matiere[$i]['MAT_CODE'];?>
					><?= getMatiereById($matiere[$i]['MAT_CODE'])['MAT_LIBELLE'];?>
					<br>
					
			<?php } ?>          
    	</fieldset>
	</div>
	</td></tr></table>
	<br>


			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>
