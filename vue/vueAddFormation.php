	<body>
   <center><h2>Formulaire d'ajout </h2>

<p></p>


<form method="post" action="./?action=insertForm">
	<table><tr><td>
	<div class="ui-widget">
  <label for="creneaux">Créneaux: </label>
  <input id="creneaux" name="FORM_CRE">
	</div><br>

	<div class="ui-widget">
  <label for="stages">Stages: </label>
  <input id="stages" name="FORM_STA">
	</div><br>

	<div class="ui-widget">
  <label for="matieres">Matieres: </label>
  <input id="matieres" name="FORM_MAT">
	</div><br>

	<div class="ui-widget">
  <label for="enseignants">Enseignants: </label>
  <input id="enseignants" name="FORM_ENS">
	</div>

	<div class="ui-widget">
	<p><label for="FORM_ELEMIN"> Nombre d'élève minimum : </label> <input type="number" id="ele_min" name="FORM_ELEMIN" min="1" max="40"></p>
	<p><label for="FORM_ELEMAX"> Nombre d'élève max : </label> <input type="number" id="ele_max" name="FORM_ELEMAX" min="11" max="40"></p>
	</div>

	</table></tr><td>
			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php   
Echo ("✨Pensez à créer votre créneau si il n'existe pas ")
?>
</center></div>