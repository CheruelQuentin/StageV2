<body>
 <style type="text/css">
            @import url("css/form.css");
</style>
<div id="container">
		<br><center><h2 id="titre">Gestion des enseignants</h2></center>
 <center><h2>Formulaire d'ajout</h2><br><br>
<script src="js/verification.js"> </script>

 <form method="post" action="./?action=upProfilEns">
	<table><tr><td>
	<p><label for="ENS_NOM"> Nom *: </label>  <input id="ENS_NOM" type="text" name="ENS_NOM" size="50px" maxlength="150" required value="<?=$nom?>" onblur="verifnomEns();" /><div><span id = "erreurnomEns" ></span></div><br>
	<p><label for="ENS_PRENOM"> Prénom *: </label>  <input id="ENS_PRENOM" type="text" name="ENS_PRENOM" size="50px" maxlength="150" required value="<?=$prenom?>" onblur="verifprenomEns();" /><div><span id = "erreurprenomEns" ></span></div><br>
	<p><label for="ENS_MAIL"> Mail *: </label>  <input id="ENS_MAIL" type="email" name="ENS_MAIL" size="50px" maxlength="150"  required value="<?=$mail?>" onblur="verifmailEns();" /><div><span id = "erreurmailEns" ></span></div><br>
	<p><label for="ENS_TEL"> Téléphone *: </label>  <input id="ENS_TEL" type="tel" name="ENS_TEL" size="50px" maxlength="14" required pattern=[0-9]{10}  value="<?=$tel?>" onblur="veriftelEns();" /><div><span id = "erreurtelens" ></span></div><br>
	<p><label for="ENS_DATENAISS"> Date de naissance *: </label>  <input id="ENS_DATENAISS" type="date" name="ENS_DATENAISS" size="50px" value="<?=$datenaissance?>"  max="<?php $date=date("Y-m-d"); echo $date ?>" required/></p>
	</td></tr></table>
<br>
<p>* Champs obligatoire</p>
			        			        <input type="submit" style="padding : 10px; width: 100px" value="Valider"/>
				    <input type="reset" style="padding : 10px; width: 100px"/></p>
				    
				    <p></p>
</form>

</div>