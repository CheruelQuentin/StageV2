	<body><br>
							<center><h2 id="titre">Gestion des matières</h2></center>
    <center><h2>Formulaire d'ajout </h2><br>
<script src="js/verification.js"> </script>
<p></p>
 <form method="post" action="./?action=insertMat">
<table><tr><td><br>
	<p><label for="MAT_LIBELLE"> Nouveau Libelle*: </label>  <input id="MAT_LIBELLE" type="text" name="MAT_LIBELLE" size="50px" maxlength="150" required placeholder="ex : Math"onblur="veriflibelle();" /><div><span id = "erreurlibelle" ></span></div><br>
			       <center> <p>* Champs obligatoire</p></center>

			        		<center>	        <input type="submit" style="padding : 10px; width: 100px" value="Valider"/></center>

				    
				    <p></p>
</form>