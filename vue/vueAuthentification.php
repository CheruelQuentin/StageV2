<style type="text/css">
            @import url("css/connexion.css");
</style>
<center>
<script>
	$(document).ready(function(){

			$('.show-password').click(function() {
				if($(this).prev('input').prop('type') == 'password') {
					//Si c'est un input type password
					$(this).prev('input').prop('type','text');
					$(this).text('cacher le mot de passe');
				} else {
					//Sinon
					$(this).prev('input').prop('type','password');
					$(this).text('afficher le mot de passe');
				}
			});

		});</script>
<div id=Form >
<br><h1 id="titre">Connexion</h1><br>
<h4>Bienvenu sur l'application ministage
	</h4>
<form action="./?action=connexion" method="POST">
<table><tr><td>

	<p><label for="mail"><strong> Login </strong></label><input id="champ" type="e-mail" name="Mail" placeholder="Identifiant" size="20" required/></p><br />
	<label for="Mdp"><strong> Mot de passe </strong></label><input id="champ" type="password" name="Mdp" placeholder="Mot de passe" required/><span class="show-password">afficher le mot de passe</span>

    <input id="bouton1" type="submit" value="Se connecter" />
</td></tr></table>
</form>
<br>

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<button id="bouton2" type="button" onclick="window.location.href='./?action=recup'" style="position:absolute;right:5%;bottom:10%;"> Mot de passe oublié ? </button>