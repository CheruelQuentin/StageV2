<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modificaion"/>
           <meta charset="utf-8"/>
     </head>
     <body>
        <center><h2>Modification Mot de passe </h2>
      


             <form method="post" action="./?action=upMdp">
             <table><tr><td>
    <p><label for="UTIL_MAIL">Insérer votre adresse </label> : <input id="UTIL_MAIL" type="text" name="UTIL_MAIL" size="50px" maxlength="150"  /></p>
    <p><label for="UTIL_MDP"> Nouveau mot de passe </label> : <input id="UTIL_MDP" type="password" name="UTIL_MDP" size="50px" maxlength="500"  /></p>
    <p><label for="UTIL_MDP2"> Confirmer le nouveau mot de passe </label> : <input id="UTIL_MDP2" type="password" name="UTIL_MDP2" size="50px" maxlength="500"  /></p>
            </tr></td></table>
    


    <br>
                    <input type="submit" value="valider"/>
                    <input type="reset"/></p>
                    <p></p>

             </form></center>
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
<?php   
Echo ("✨Attention le mot de passe peut actuellement être redonné par l'admin si vous le changez l'admin ne pourra plus vous le rendre");
?>
      </body>
</html>