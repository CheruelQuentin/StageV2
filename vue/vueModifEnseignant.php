<!doctype html>
<html>
      <head>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body>
<div id="container">
  <br>
  <center><h2 id="titre">Gestion des enseignants</h2></center>
    <center><h2>Modification de l'enseignant</h2><br><br>
       <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upEns">
                  <center><table><tr><td>
                  <input id="ENS_ID" type="hidden" name="ENS_ID" size="50px" maxlength="20" value="<?=$_GET['id']?>" />
                  <p><label for="ENS_NOM">Nom *:</label><input id="ENS_NOM" type="text" name="ENS_NOM" size="50px" maxlength="150" required value="<?=$nom?>" onblur="verifmodifnomEns();" /><div><span id = "erreurmodifnomEns" ></span></div><br>

                  <p><label for="ENS_PRENOM">Prénom *:</label><input id="ENS_PRENOM" type="text" name="ENS_PRENOM" size="50px" required  maxlength="150" value="<?=$prenom?>" onblur="verifmodifprenomEns();" /><div><span id = "erreurmodifprenomEns" ></span></div><br>

                  <p><label for="ENS_MAIL">Mail *:</label><input id="ENS_MAIL" type="mail" name="ENS_MAIL" size="50px" required maxlength="150" value="<?=$mail?>" onblur="verifmodifmailEns();" /><div><span id = "erreurmodifmailEns" ></span></div><br>

                  <p><label for="ENS_TEL">Téléphone *:</label><input id="ENS_TEL" type="tel" name="ENS_TEL" size="50px" maxlength="14" value="<?=$tel?>"  onblur="verifmodiftelEns();" /><div><span id = "erreurmodiftelens" ></span></div><br>

                  <p><label for="ENS_DATENAISS">Date de naissance *:</label><input id="ENS_DATENAISS" type="date" name="ENS_DATENAISS" size="50px" maxlength="20" value="<?=$dateN?>" /></p>
                  </td></tr></table></center>
    <br>
    <center>
<p>* Champ obligatoire</p>
      <br>
                   <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
                    
                    </center><p></p>
                  
             </form>
      </body>
</html>