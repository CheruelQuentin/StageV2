<style type="text/css">
            @import url("css/connexion.css");
</style>

<div id=Form>
<br><h1 id="titre">Connexion</h1><br>
<form action="./?action=connexion" method="POST">

    <input id="champ" type="e-mail" name="Mail" placeholder="Identifiant" /><br />
    <input id="champ" type="password" name="Mdp" placeholder="Mot de passe"/><br />
    <input id="bouton1" type="submit" value="Se connecter" />

</form>

</div>

<button id="bouton2" type="button" onclick="window.location.href='./?action=recup'" style="position:absolute;right:5%;bottom:10%;"> Mot de passe oublié ? </button>