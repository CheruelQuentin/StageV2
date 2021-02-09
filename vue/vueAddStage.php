	<body>
							<center><h2 id="titre">Gestion des formations</h2></center>

    <center><h2>Formulaire d'ajout </h2>
<script src="js/verification.js"> </script>
<p></p>
 <form method="post" action="./?action=insertSta">
	<table><tr><td>
	<p><label for="FORM_LIBELLE"> Nouveau Libelle*: </label>  <input id="FORM_LIBELLE" type="text" name="FORM_LIBELLE" size="50px" maxlength="128" required placeholder="ex : BTS SIO" onblur="veriflibellestage();" /><div><span id = "erreurlibellestage" ></span></div><br>
			        <p>* Champs obligatoire</p>
<br>
			        <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
				    <input type="reset"/></p>
				    
				    <p></p>
</form>