<body>
    <h2 id="titre">Ajout d'élève</h2>
<script src="js/verification.js"> </script>
<?php $formations=getFormation();?>
<p></p> 

 <form method="post" action="./?action=insertEle">

	<div class="ui-widget">
  <label for="etablissements">Etablissement : </label>
  <input id="etablissements" name="ELE_ETA">
	</div>

	<p><label for="ELE_NOM"> Nom :</label><input id="ELE_NOM" type="text" name="ELE_NOM" size="50px" maxlength="100" placeholder="Nom" onblur="verifnomEle();" /><span id = "erreurnomEle" ></span></p>
	<p><label for="ELE_PRENOM"> Prénom :</label><input id="ELE_PRENOM" type="text" name="ELE_PRENOM" size="50px" maxlength="100" placeholder="Prénom" onblur="verifprenomEle();" /><span id = "erreurprenomEle" ></span></p>
	<p><label for="ELE_DATENAISS"> Date de naissance :</label><input id="ELE_DATENAISS" type="date" name="ELE_DATENAISS" size="50px" maxlength="20" placeholder="Date de naissance" /></p>
	<p><label for="ELE_CLASSE"> Classe :</label><input id="ELE_CLASSE" type="text" name="ELE_CLASSE" size="50px" maxlength="10" placeholder="Classe" onblur="verifclasse();" /><span id = "erreurclasse" ></span></p>
	<p><label for="ELE_MAIL"> Mail(non obligatoire) :</label><input id="ELE_MAIL" type="text" name="ELE_MAIL" size="50px" maxlength="150" placeholder="E-mail" /></p>

	<div id="choixForm">
		<fieldset>      
        <legend>Formations à suivre</legend>           
        <?php
				for($i=0;$i<sizeof($formations);$i++){ ?> 
					<input type="checkbox" name="choixForm[]" value=<?= $formations[$i]['FORM_ID'];?>
					><?= getStageById($formations[$i]['FORM_STA'])['STA_LIBELLE'], " - ", getMatiereById($formations[$i]['FORM_MAT'])['MAT_LIBELLE'], " | ", getCreneauById($formations[$i]['FORM_CRE'])['CRE_DATE'], " - ",getCreneauById($formations[$i]['FORM_CRE'])['CRE_HEUREDEB'];?>
					<br>
					
			<?php } ?>          
    	</fieldset>
	</div>

			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>