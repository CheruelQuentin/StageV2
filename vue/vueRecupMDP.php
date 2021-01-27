<style type="text/css">
            @import url("css/connexion.css");
</style>

<div id=Form>

<h1 id="titre">Récupération <br/> de mot de passe</h1>
<form action="./?action=recup" method="POST">

    <input id="champ" type="e-mail" name="recupMail" placeholder="Votre adresse e-mail"/>
    <input id="bouton1" type="submit" name="recupSubmit" value="Envoyer le mail" />

</form>
<br/><?php if(isset($erreur)) { echo '<span  style="color:red;">'.$erreur.'</span>'; } else{ echo " ";}?>
</div>
