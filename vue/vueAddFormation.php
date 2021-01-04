	<body>
   <center><h2>Formulaire d'ajout </h2></center>

<p></p>


<form method="post" action="./?action=insertForm">

	<div class="ui-widget">
  <label for="creneaux">Créneaux: </label>
  <input id="creneaux" name="FORM_CRE">
	</div>

	<div class="ui-widget">
  <label for="stages">Stages: </label>
  <input id="stages" name="FORM_STA">
	</div>

	<div class="ui-widget">
  <label for="matieres">Matieres: </label>
  <input id="matieres" name="FORM_MAT">
	</div>

	<div class="ui-widget">
  <label for="enseignants">Enseignants: </label>
  <input id="enseignants" name="FORM_ENS">
	</div>

	<p><label for="FORM_ELEMIN"> Nombre d'élève minimum : </label> <input type="number" id="ele_min" name="FORM_ELEMIN" min="11" max="40"></p>
	<p><label for="FORM_ELEMAX"> Nombre d'élève max : </label> <input type="number" id="ele_max" name="FORM_ELEMAX" min="11" max="40"></p>

			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>