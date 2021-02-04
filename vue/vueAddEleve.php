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
 	

	<p><label for="ELE_NOM"> Nom </label><input id="ELE_NOM" type="text" name="ELE_NOM" size="50px" maxlength="100" required pattern="[a-zA-ZÀ-ÿ-\(-\-]{1,100}" title="La première lettre doit être une majuscule"/></p>
	<p><label for="ELE_PRENOM"> Prénom </label><input id="ELE_PRENOM" required pattern="[a-zA-ZÀ-ÿ-\(-\-]{1,100}" title="La première lettre doit être une majuscule" type="text" name="ELE_PRENOM" size="50px" maxlength="100"/></p>
	<p><label for="ELE_DATENAISS"> Date de naissance </label><input id="ELE_DATENAISS" type="date" name="ELE_DATENAISS" size="50px" maxlength="20"  /></p>
	<p><label for="ELE_CLASSE"> Classe </label><input id="ELE_CLASSE" type="text" name="ELE_CLASSE" size="50px" maxlength="10"/></span></p>
	<p><label for="ELE_MAIL"> Mail(non obligatoire) </label><input id="ELE_MAIL" type="text" name="ELE_MAIL" size="50px" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="150"  /></p>

	<div id="choixForm">
		<fieldset class="scheduler-border"><br>    
        	<legend class="scheduler-border">Formations à suivre</legend>           
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
				    <p></p>
</form>