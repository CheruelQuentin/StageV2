<body>
 <style type="text/css">
            @import url("css/form.css");
</style>
<div id="container">
	<br>
	<center><h2 id="titre">Gestion des Admins</h2></center>
    <center><h2>Ajout admin</h2><br><br>
<script src="js/verification.js"> </script>
<p></p> 
	<link rel="stylesheet" type="text/css" href="css/liste.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">

	 <script>

	
$(document).ready(function(){

		$('.show-password').click(function() {
			if($(this).prev('input').prop('type') == 'password') {
				//Si c'est un input type password
				$(this).prev('input').prop('type','text');
				$(this).html('<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" class="bi bi-eye-slash-fill" viewBox="0 0 16 16"><path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.027 7.027 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.088z"/><path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6l-12-12 .708-.708 12 12-.708.707z"/></svg>');
			} else {
				//Sinon
				$(this).prev('input').prop('type','password');
				$(this).html('<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"  class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/></svg>');
			}
		});

	});</script>

 <form method="post" action="./?action=insertAdmin">
 <table><tr><td> 
 	
	<p><label for="UTIL_MAIL" style="width:220px;"> Mail *:</label><input id="UTIL_MAIL" type="mail" name="UTIL_MAIL" size="50px" maxlength="100" required placeholder="ex : admin@admin.fr" /><br>
	<p><label for="UTIL_MDP2" style="width:220px;"> Mot de passe *:</label><input id="UTIL_MDP2" required  type="password" name="UTIL_MDP2" size="50px" maxlength="100" required/><br>
	<p><label for="UTIL_MDP3" style="width:220px;"> Confirmer le mot de passe *:</label><input id="UTIL_MDP3" type="password" name="UTIL_MDP3" size="50px" maxlength="20" required onblur="verifChangementMDP();" /><span class="show-password"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"  class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg></span><div><span id = "erreurChangementmdp" ></span></div><br>
	<br>
	</div>
	</td><tr></table><br><p>* Champs obligatoire</p><br>
			        			        			        <input type="submit" style="padding : 10px; width: 100px" value="Valider"/>
				    <input type="reset" style="padding : 10px; width: 100px"/></p>
				    
</form>