<center><h5><?php echo $titre ?></h5></center>
	<body>
    <h2>Formulaire d'ajout </h2>
<script src="js/verification.js"> </script>
<p></p>
 <form method="post" action="./?action=insertSta">

	<p><label for="STA_LIBELLE"> Nouveau Libelle </label> : <input id="STA_LIBELLE" type="text" name="STA_LIBELLE" size="50px" maxlength="128" placeholder="STA_LIBELLE" onblur="veriflibellestage();" /><span id = "erreurlibellestage" ></span></p>
</p>
			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>