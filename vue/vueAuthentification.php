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
					$(this).html('<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" class="bi bi-eye-slash-fill" viewBox="0 0 16 16"><path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.027 7.027 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.088z"/><path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6l-12-12 .708-.708 12 12-.708.707z"/></svg>');
				} else {
					//Sinon
					$(this).prev('input').prop('type','password');
					$(this).html('<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"  class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/></svg>');
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
				<span class="show-password"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"  class="bi bi-eye-fill" viewBox="0 0 16 16">
  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
</svg></span></center>
				
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


