<center><h5><?php echo $titre ?></h5></center>
	<body>
    <h2>Formulaire d'ajout </h2>
<script src="js/verification.js"> </script>
<p></p>
 <form method="post" action="./?action=insertMat">

	<p><label for="MAT_LIBELLE"> Nouveau Libelle </label> : <input id="MAT_LIBELLE" type="text" name="MAT_LIBELLE" size="50px" maxlength="150" placeholder="MAT_LIBELLE" onblur="veriflibelle();" /><span id = "erreurlibelle" ></span></p>

			        <input type="submit" value="valider"/>
				    <input type="reset"/></p>
				    <p></p>
</form>