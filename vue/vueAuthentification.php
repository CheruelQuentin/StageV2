<style type="text/css">
            @import url("css/connexion.css");
</style>
<center>
<script>$(document).ready(function(){
			$('.show-password').click(function() {
				if($(this).prev('input').prop('type') == 'password') {
					//Si c'est un input type password
					$(this).prev('input').prop('type','text');
					$(this).text('Cacher le mot de passe');
				} else {
					//Sinon
					$(this).prev('input').prop('type','password');
					$(this).text('Afficher le mot de passe');
				}
			});
 
		});</script>
<div id=Form >
<br><h1 id="titre">Connexion</h1><br>
<form action="./?action=connexion" method="POST">

	<p><label for="mail"><strong> Login </strong></label><input id="champ" type="e-mail" name="Mail" placeholder="Identifiant" size="50" required/></p><br />
	<label for="Mdp"><strong> Mot de passe </strong></label><input id="champ" type="password" name="Mdp" placeholder="Mot de passe" required/><br><span class="show-password">Afficher le mot de passe </span><br>
    <input id="bouton1" type="submit" value="Se connecter" />

</form>

</div>

