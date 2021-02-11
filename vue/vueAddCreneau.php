	<body>
	<br>
	<center><h2 id="titre">Gestion des Créneaux</h2></center>
    <center><h2>Formulaire d'ajout </h2>
	<br><br>
<script src="js/verification.js"> </script>
<p></p>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=insertCre">

	<table><tr><td>

	<p><label for="CRE_DATE"style="width:220px;"> Date *: </label> <input id="CRE_DATE" type="date" name="CRE_DATE" size="50px" maxlength="20"  class= "instyle" /></p>


	<p><label for="CRE_HEUREDEB"style="width:220px;">Heure de début *:</label><select name="CRE_HEUREDEB" id="CRE_HEUREDEB" type="time">
      <option value="8:15">8:15</option>
      <option value="9:10">9:10</option>
      <option value="10:05">10:05</option>
	  <option value="10:20">10:20</option>
      <option value="11:15">11:15</option>
      <option value="12:10">12:10</option>
	  <option value="13:05">13:05</option>
      <option value="14:00">14:00</option>
      <option value="14:55">14:55</option>
	  <option value="15:50">15:50</option>
      <option value="16:05">16:05</option>
      <option value="17:00">17:00</option>
	  <option value="17:55">17:00</option>
	</select></p>
	<p><label for="CRE_SALLE"style="width:220px;"> Salle *: </label> <input id="CRE_SALLE" style="width:75px;" type="text" name="CRE_SALLE" required pattern="[A-Z]{1}[0-9]{3}" size="50px" maxlength="5" onblur="verifSalle();" /><div></div><span id = "erreursalle" ></span></div><br>
	<p><label for="CRE_HEUREFIN"style="width:220px;">Heure de fin *:</label><select name="CRE_HEUREFIN" id="CRE_HEUREFIN" type="time">
      <option value="8:15">8:15</option>
      <option value="9:10">9:10</option>
      <option value="10:05">10:05</option>
	  <option value="10:20">10:20</option>
      <option value="11:15">11:15</option>
      <option value="12:10">12:10</option>
	  <option value="13:05">13:05</option>
      <option value="14:00">14:00</option>
      <option value="14:55">14:55</option>
	  <option value="15:50">15:50</option>
      <option value="16:05">16:05</option>
      <option value="17:00">17:00</option>
	  <option value="17:55">17:00</option>
	</select></p>
<br>	
	<div class="ui-widget">
	<p><label for="STA_ELEMIN"style="width:220px;"> Nombre d'élève min *: </label> <input type="number" id="ele_min" name="STA_ELEMIN" min="1" max="1000"></p>
	<p><label for="STA_ELEMAX"style="width:220px;"> Nombre d'élève max *: </label> <input type="number" id="ele_max" name="STA_ELEMAX" min="1" max="1000"/><div><br>

	



<p><label for="CRE_MAT"style="width:220px;"> Matière *: </label> 
			<select  required name="CRE_MAT">
			<?php
				for($i=0;$i<sizeof($matiere);$i++){ ?> 
					<option value= <?= $matiere[$i]['MAT_CODE'];?> > 
						<?= $matiere[$i]['MAT_LIBELLE']; ?> </option> 
			<?php } ?>
		</select>
	</p><br>
<p>Veuillez sélectionner un stage *: </p>
	<div id="choixForm">
		<fieldset class="scheduler-border">    
        	<legend class="scheduler-border">Stage</legend>           
        <?php
				for($i=0;$i<sizeof($formation);$i++){ ?> 
					<input required type="radio"name="choixForm[]"value=<?= $formation[$i]['FORM_CODE'];?>
					><?= ' ',getFormationById($formation[$i]['FORM_CODE'])['FORM_LIBELLE'];?>
					<br> 
					<br>		
			<?php } ?>          
    	</fieldset>
	</div>


	</td></tr></table>
	<br>
<p>* Champs obligatoires</p><br>

			  			        			        <input type="submit" style="padding : 10px; width: 100px" value="Valider"/>
				    <input type="reset" style="padding : 10px; width: 100px"/></p>
				    
				    <p></p>
</form>
