<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modificaion"/>
           <meta charset="utf-8"/>
     </head>
     <body>
     <br><center><h2>Modification Mot de passe </h2><br>
     
      <form method="post" action="./?action=upMdp">
            <table>
                  <tr>
                        <td>
                              <label for="UTIL_MDP2" size="40px"> Nouveau mot de passe </label><input id="UTIL_MDP2" type="password" name="UTIL_MDP2" size="50px" maxlength="150"  />
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