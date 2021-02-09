	<body>
		<br><center><h2 id="titre">Gestion des formations</h2></center>
        <center><h2>Formulaire d'ajout </h2><br>
        <script src="js/verification.js"> </script>
        <p></p>
        <form method="post" action="./?action=insertSta">
	    <table><tr><td>
	<p><label for="FORM_LIBELLE"> Nouveau Libelle*: </label>  <input id="FORM_LIBELLE" type="text" name="FORM_LIBELLE" size="50px" maxlength="128" required placeholder="ex : BTS SIO" onblur="veriflibellestage();" /><div><span id = "erreurlibellestage" ></span></div><br>
			        <center><p>* Champs obligatoire</p></center>
<br>
			        			        <center><input type="submit" style="padding : 10px; width: 100px" value="Valider"/></center>

				    
				    <p></p>
</form>