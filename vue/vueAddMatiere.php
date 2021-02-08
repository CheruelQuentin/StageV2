	<body>
							<center><h2 id="titre">Gestion des matières</h2></center>
    <center><h2>Formulaire d'ajout </h2>
<script src="js/verification.js"> </script>
<p></p>
 <form method="post" action="./?action=insertMat">
<table><tr><td>
	<p><label for="MAT_LIBELLE"> Nouveau Libelle*: </label>  <input id="MAT_LIBELLE" type="text" name="MAT_LIBELLE" size="50px" maxlength="150" required placeholder="ex : Math"onblur="veriflibelle();" /><div><span id = "erreurlibelle" ></span></div><br>
			        <p>* Champs obligatoire</p>
			        <br>
			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>