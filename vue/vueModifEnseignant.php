<!doctype html>
<html>
      <head><br><br>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body><br>
         <center><h2>Modification Enseignant </h2></center>
       <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upEns">
                  <center><table><tr><td>
                  <input id="ENS_ID" type="hidden" name="ENS_ID" size="50px" maxlength="20" value="<?=$_GET['id']?>" />
                  <p><label for="ENS_NOM">Nom </label> : <input id="ENS_NOM" type="text" name="ENS_NOM" size="50px" maxlength="150" required value="<?=$nom?>" /></p>
                  <p><label for="ENS_PRENOM">Prénom </label> : <input id="ENS_PRENOM" type="text" name="ENS_PRENOM" size="50px" required  maxlength="150" value="<?=$prenom?>" /></p>
                  <p><label for="ENS_MAIL">Mail </label> : <input id="ENS_MAIL" type="mail" name="ENS_MAIL" size="50px" required maxlength="150" value="<?=$mail?>" /></p>
                  <p><label for="ENS_TEL">Téléphone </label> : <input id="ENS_TEL" type="tel" name="ENS_TEL" size="50px" maxlength="14" value="<?=$tel?>"  /></p>
                  <p><label for="ENS_DATENAISS">Date de naissance </label> : <input id="ENS_DATENAISS" type="date" name="ENS_DATENAISS" size="50px" maxlength="20" value="<?=$dateN?>" /></p>
                  </td></tr></table></center>
    <br>
    <center>
                    <input type="submit" value="valider"/>
                    
                    </center><p></p>
                  
             </form>
      </body>
</html>