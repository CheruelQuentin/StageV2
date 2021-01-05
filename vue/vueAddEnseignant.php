<body>
 <style type="text/css">
            @import url("css/form.css");
</style>
<div id="container">
 <center><h2 id="titre">Ajout d'enseignant </h2>
<script src="js/verification.js"> </script>

 <form method="post" action="./?action=insertEns">
	<table><tr><td>
	<p><label for="ENS_NOM"> Nom </label> : <input id="ENS_NOM" type="text" name="ENS_NOM" size="50px" maxlength="150"  onblur="verifnomEns();" /><span id = "erreurnomEns" ></span></p>
	<p><label for="ENS_PRENOM"> Prénom </label> : <input id="ENS_PRENOM" type="text" name="ENS_PRENOM" size="50px" maxlength="150"  onblur="verifprenomEns();" /><span id = "erreurprenomEns" ></span></p>
	<p><label for="ENS_MAIL"> Mail </label> : <input id="ENS_MAIL" type="text" name="ENS_MAIL" size="50px" maxlength="150"  onblur="verifmailEns();" /><span id = "erreurmailEns" ></span></p>
	<p><label for="ENS_TEL"> Téléphone </label> : <input id="ENS_TEL" type="tel" name="ENS_TEL" size="50px" maxlength="12"  onblur="veriftelEns();" /><span id = "erreurtelens" ></span></p>
	<p><label for="ENS_DATENAISS"> Date de naissance </label> : <input id="ENS_DATENAISS" type="date" name="ENS_DATENAISS" size="50px"   /></p>
	</td></tr></table>


			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>
</div>