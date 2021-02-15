<style type="text/css">
            @import url("css/connexion.css");
</style>
<center>
<!--link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css>
    <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js></script>
    <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js></script-->

<script>

	
	$(document).ready(function(){

			$('.show-password').click(function() {
				if($(this).prev('input').prop('type') == 'password') {
					//Si c'est un input type password
					$(this).prev('input').prop('type','text');
					$(this).text('👀');
				} else {
					//Sinon
					$(this).prev('input').prop('type','password');
					$(this).text('🙄');
				}
			});

		});</script>
<div id=Form >
	<center>
<br><h1 id="titre">Bienvenue sur l’application mini-stage </h1><br>
<h2>Merci de vous identifier</h2><br><br>

<form action="./?action=connexion" method="POST">
<table>
		<tr>
			<td>
				<label for="login"><strong> Login </strong></label>
			</td>
			<td>
				<input id="login" type="e-mail" name="Mail" placeholder="Identifiant" size="25" required/><br />
			</td>
		</tr>
		<tr>
			<td>
				<label for="Mdp"><strong> Mot de passe </strong></label>
			</td>
			<td>
				<center><input id="Mdp" type="password" name="Mdp" placeholder="Mot de passe" required/>&nbsp;
				<span class="show-password">🙄</span></center>
				
				<br>
			</td>
		</tr>
        <tr>
		    <td>
			</td>
		    <td>
		        <input id="bouton1" type="submit" value="Se connecter" />
				<br /><br />
				<button id="bouton2" type="button" onclick="window.location.href='./?action=recup'"> Mot de passe oublié ? </button>
            </td>
        </tr>
</table>

</form>
</center>
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


