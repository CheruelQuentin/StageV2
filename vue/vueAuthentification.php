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
<br><h1 id="titre">Bienvenue sur l’application miniStage, veuillez vous identifier</h1><br>
<form action="./?action=connexion" method="POST">
<table>
		<tr>
			<td>
				<center><label for="mail"><strong> Login </strong></label></center>
			</td>
			<td>
				<input id="champ" type="e-mail" name="Mail" placeholder="Identifiant" size="25" required/><br />
			</td>
		</tr>
		<tr>
			<td>
				<center><label for="Mdp"><strong> Mot de passe </strong></label></center>
			</td>
			<td>
				<center><input id="champ" type="password" name="Mdp" placeholder="Mot de passe" required/><span class="show-password">afficher le mot de passe</span></center><br>
			</td>
		</tr>
</td></tr></table>
<center><input id="bouton1" type="submit" value="Se connecter" /></center>
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