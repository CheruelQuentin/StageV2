	<body>
    <center><h2>Formulaire d'ajout </h2>
<script src="js/verification.js"> </script>
<p></p>
 <form method="post" action="./?action=insertEta">
 <table><tr><td>  
<p><label for="ETA_NOM"> Nom établissement : </label><input id="ETA_NOM" type="text" name="ETA_NOM" size="50px" maxlength="150" placeholder="Nom" onblur="verifnomEtab();" /><span id = "erreurnomEtab" ></span></p>

<p><label for="ETA_VILLE"> Ville établissement : </label><input id="ETA_VILLE" type="text" name="ETA_VILLE" size="50px" maxlength="150" placeholder="Ville" onblur="verifville();"/><span id = "erreurville" ></span></p>

<p><label for="ETA_ADRESSE"> Adresse établissement : </label><input id="ETA_ADRESSE" type="text" name="ETA_ADRESSE" size="50px" maxlength="150" placeholder="Adresse" onblur="verifadresse();"/><span id = "erreuradresse" ></p>

<p><label for="ETA_CP"> Code postal : </label><input id="ETA_CP" type="text" name="ETA_CP" size="50px" maxlength="6" placeholder="Code postal" onblur="verifcp();" /><span id = "erreurcp" ></p>

<p><label for="ETA_MAIL"> E-Mail établissement : </label><input id="ETA_MAIL" type="text" name="ETA_MAIL" size="50px" maxlength="150" placeholder="E-mail" onblur="verifmail();" /><span id = "erreurmail" ></p>
	
<p>Civilité du proviseur :
<input type="radio" name="ETA_PROVCIVIL" value="M." for="M.">M.</label>
<input type="radio" name="ETA_PROVCIVIL" value="Mme." for="Mme.">Mme.</label></p>

<p><label for="ETA_PROVNOM"> Nom du proviseur : </label><input id="ETA_PROVNOM" type="text" name="ETA_PROVNOM" size="50px" maxlength="150" placeholder="Nom" onblur="verifnomProv();" /><span id = "erreurprovnom" ></p>

<p><label for="ETA_PROVPRENOM"> Prénom du proviseur : </label><input id="ETA_PROVPRENOM" type="text" name="ETA_PROVPRENOM" size="50px" maxlength="150" placeholder="Prénom" onblur="verifprenomProv();" /><span id = "erreurprovprenom" ></p>

<p><label for="ETA_TEL"> Téléphone : </label><input id="ETA_TEL" type="tel" name="ETA_TEL" size="50px" maxlength="12" placeholder="Tel." onblur="veriftel();"/><span id = "erreurtel" ></p>

<p><label for="ETA_SECU"> N° Sécu : </label><input id="ETA_SECU" type="text" name="ETA_SECU" size="50px" maxlength="15" placeholder="N° Sécu" onblur="verifsecu();"/><span id = "erreursecu" ></p>

<p>Type de sécu :
<input type="radio" name="ETA_NOMSECU" value="MAE" for="MAE"> MAE</label>
<input type="radio" name="ETA_NOMSECU" value="MAIF"  for="MAIF"> MAIF</label>
</p>
</td><tr></table>
<br><input type="submit" value="valider"/>

</form>