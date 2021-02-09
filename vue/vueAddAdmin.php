<body>
 <style type="text/css">
            @import url("css/form.css");
</style>
<div id="container">
	<br>
	<center><h2 id="titre">Gestion des Admins</h2></center>
    <center><h2>Ajout admin</h2><br>
<script src="js/verification.js"> </script>
<p></p> 
	<link rel="stylesheet" type="text/css" href="css/liste.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=insertAdmin">
 <table><tr><td> 
 	
	<p><label for="UTIL_MAIL"> Mail *:</label><input id="UTIL_MAIL" type="mail" name="UTIL_MAIL" size="50px" maxlength="100" required placeholder="ex : admin@admin.fr" /><br>
	<p><label for="UTIL_MDP2"> Mot de passe *:</label><input id="UTIL_MDP2" required  type="password" name="UTIL_MDP2" size="50px" maxlength="100" required/><br>
	<p><label for="UTIL_MDP3"> Date de naissance *:</label><input id="UTIL_MDP3" type="password" name="UTIL_MDP3" size="50px" maxlength="20" required onblur="verifChangementMDP();" /><div><span id = "erreurChangementmdp" ></span></div><br>
	<br>
	</div>
	</td><tr></table><br><p>* Champs obligatoire</p><br>
			        <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
				    <input type="reset"/></p>
				    
</form>