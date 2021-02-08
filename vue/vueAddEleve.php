<body>
	<br>
	<center><h2 id="titre">Gestion des élèves</h2></center>
    <center><h2>Ajout d'élève</h2><br>
<script src="js/verification.js"> </script>
<p></p> 
	<link rel="stylesheet" type="text/css" href="css/liste.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">

 <form method="post" action="./?action=insertEle">
 <table><tr><td> 
 	
	<p><label for="ELE_NOM"> Nom*:</label><input id="ELE_NOM" type="text" name="ELE_NOM" size="50px" maxlength="100" required placeholder="ex : Jack" /></p>
	<p><label for="ELE_PRENOM"> Prénom*:</label><input id="ELE_PRENOM" required  type="text" name="ELE_PRENOM" size="50px" maxlength="100" placeholder="ex : Frank"/></p>
	<p><label for="ELE_DATENAISS"> Date de naissance*:</label><input id="ELE_DATENAISS" type="date" name="ELE_DATENAISS" size="50px" maxlength="20"  /></p>
	<p><label for="ELE_CLASSE"> Classe*:</label><input id="ELE_CLASSE" type="text" name="ELE_CLASSE" size="50px" maxlength="10" placeholder="ex : 1STMG2"/></p>
	<p><label for="ELE_MAIL"> Mail:</label><input id="ELE_MAIL" type="email" name="ELE_MAIL" size="50px" maxlength="150"  /></p><br>

	<div id="choixForm">
		<fieldset class="scheduler-border">    
        	<legend class="scheduler-border">Choisir les ministages suivi par l’élève</legend>           

        <?php
				for($i=0;$i<sizeof($stage);$i++){ ?> 
					<input type="checkbox" name="choixForm[]" value=<?= $stage[$i]['STA_ID'];?>>&nbsp;&nbsp;&nbsp;
					<?= getFormationById($stage[$i]['STA_FORM'])['FORM_LIBELLE'], " - ", getMatiereById($stage[$i]['STA_MAT'])['MAT_LIBELLE'], " | ", getCreneauById($stage[$i]['STA_CRE'])['CRE_DATE'], " - ",substr(getCreneauById($stage[$i]['STA_CRE'])['CRE_HEUREDEB'],0,-3);?>
					<br><br>
					
			<?php } ?>          
    	</fieldset>
	</div>
	</td><tr></table><br>
			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p>Champs obligatoire *</p>
</form>