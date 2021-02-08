<!doctype html>
<html>
      <head>
            <center><h2 id="titre">Changement de mot de passe </h2></center>
            <meta name="description" content="Formulaire de modificaion"/>
            <meta charset="utf-8"/>
     </head>
     <body>
            <?php echo $_SESSION["UTIL_ETA"]; ?>
            <br><center><h2>Modification Mot de passe </h2><br>

            <form method="post" action="./?action=upMdp3">
                  <table>
                        <tr>
                              <td>
                                    <p><label for="UTIL_MAIL">Insérer votre adresse </label> : <input id="UTIL_MAIL" type="text" name="UTIL_MAIL" size="50px" maxlength="150"  /></p>
                              </td>
                        </tr>
                        <tr>
                              <td>
                                    <label for="UTIL_MDP2"> Nouveau mot de passe </label> : <input id="UTIL_MDP2" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"title=" Doit contenir au moins un chiffre et une lettre majuscule et minuscule, et au moins 8 caractères ou plus" name="UTIL_MDP2" size="50px" maxlength="150"  />
                              </td>
                        </tr>
                        <tr>
                              <td>
                                    <label for="UTIL_MDP3"> Répéter le mot de passe </label> : <input id="UTIL_MDP3" type="password" name="UTIL_MDP3" size="50px" maxlength="150"  />
                              </td>
                        </tr>
                  </table>
                  <br>
                  <input type="submit" value="valider"/>
                  
                  <p></p>
            </form>
             
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