<!doctype html>
<html>
      <head>
            <center><h2 id="titre">Changement de mot de passe </h2></center>
            <meta name="description" content="Formulaire de modificaion"/>
           <meta charset="utf-8"/>
     </head>
     <body>
     <br><center><h2>Modification Mot de passe </h2><br>
     
      <form method="post" action="./?action=upMdp2">
            <table>
                  <tr>
                        <td>
                              <label for="UTIL_MDP2" size="40px"> Nouveau mot de passe </label><input id="UTIL_MDP2" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title=" Doit contenir au moins un chiffre et une lettre majuscule et minuscule, et au moins 8 caractères ou plus" name="UTIL_MDP2" size="50px" maxlength="150"  />
                        </td>
                  </tr>
                  <tr>
                        <td>
                              <label for="UTIL_MDP3" size="40px"> Répéter le mot de passe </label><input id="UTIL_MDP3" type="password" name="UTIL_MDP3" size="50px" maxlength="150"  />
                        </td>
                  </tr>
            </table>
      
      <br>
      <input type="submit" value="valider"/>
      <input type="reset"/></p>
      </form>
             

      </body>
</html>