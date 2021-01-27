	<body>
			<center><h2 id="titre">Gestion des Établissements</h2></center>
    <center><h2>Formulaire d'ajout </h2>
<script src="js/verification.js"> </script>
<p></p>
 <form method="post" action="./?action=insertEta">

<table><tr><td> 
<p><label for="ETA_NOM"> Nom établissement: </label><input id="ETA_NOM" type="text" name="ETA_NOM" size="50px" maxlength="150"  onblur="verifnomEtab();" /><span id = "erreurnomEtab" ></span></p>


<p><label for="ETA_VILLE"> Ville établissement: </label><input id="ETA_VILLE" type="text" name="ETA_VILLE" size="50px" maxlength="150" required pattern="[a-zA-ZÀ-ÿ]{1,100}" title="La première lettre doit être une majuscule"  onblur="verifville();"/><span id = "erreurville" ></span></p>

<p><label for="ETA_ADRESSE"> Adresse établissement: </label><input id="ETA_ADRESSE" type="text" name="ETA_ADRESSE" size="50px" maxlength="150" onblur="verifadresse();"/><span id = "erreuradresse" ></p>
<br>
<p><label for="ETA_CP"> Code postal: </label><input id="ETA_CP" type="text" name="ETA_CP" size="50px" maxlength="6"  onblur="verifcp();" /><span id = "erreurcp" ></p>

<p><label for="ETA_MAIL"> E-Mail établissement: </label><input id="ETA_MAIL" type="text" name="ETA_MAIL" size="50px" required pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" maxlength="150"  onblur="verifmail();" /><span id = "erreurmail" ></p>
	<br>
<p>Civilité du proviseur :
<input type="radio" name="ETA_PROVCIVIL" value="M." for="M.">M.</label>
<input type="radio" name="ETA_PROVCIVIL" value="Mme." for="Mme.">Mme.</label></p>

<p><label for="ETA_PROVNOM"> Nom du proviseur: </label><input id="ETA_PROVNOM" type="text" name="ETA_PROVNOM" size="50px" maxlength="150"  onblur="verifnomProv();" /><span id = "erreurprovnom" ></p>

<p><label for="ETA_PROVPRENOM"> Prénom du proviseur: </label><input id="ETA_PROVPRENOM" type="text" name="ETA_PROVPRENOM" size="50px" maxlength="150"  onblur="verifprenomProv();" /><span id = "erreurprovprenom" ></p>
<br>
<p><label for="ETA_TEL"> Téléphone: </label><input id="ETA_TEL" type="tel" name="ETA_TEL" size="50px" maxlength="12"  onblur="veriftel();"/><span id = "erreurtel" ></p>
<br>
<p><label for="ETA_SECU"> N° Assurance: </label><input id="ETA_SECU" type="text" name="ETA_SECU" size="50px" maxlength="15"/>

<p>Type de sécu :
<input type="radio" name="ETA_NOMSECU" value="MAE" for="MAE"> MAE</label>
<input type="radio" name="ETA_NOMSECU" value="MAIF"  for="MAIF"> MAIF</label>
</p>
</td><tr></table>
<br><input type="submit" value="valider"/>
</form>
<?php   
Echo ("✨Le mot de passe sera le nom de famille du proviseur/e")
?>