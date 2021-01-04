<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body>
         <center><h2>Modification Enseignant </h2>
       <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upEns">


<input id="ENS_ID" type="hidden" name="ENS_ID" size="50px" maxlength="20" value="<?=$_GET['id']?>" />
<p><label for="ENS_NOM"> Modification nom </label> : <input id="ENS_NOM" type="text" name="ENS_NOM" size="50px" maxlength="150" value="<?=$nom?>" onblur="verifmodifnomEns();" /><span id = "erreurmodifnomEns" ></span></p>
<p><label for="ENS_PRENOM"> Modification prenom </label> : <input id="ENS_PRENOM" type="text" name="ENS_PRENOM" size="50px" maxlength="150" value="<?=$prenom?>" onblur="verifmodifprenomEns();" /><span id = "erreurmodifprenomEns" ></span></p>
<p><label for="ENS_MAIL"> Modification mail </label> : <input id="ENS_MAIL" type="text" name="ENS_MAIL" size="50px" maxlength="150" value="<?=$mail?>" onblur="verifmodifmailEns();" /><span id = "erreurmodifmailEns" ></span></p>
<p><label for="ENS_TEL"> Modification telephone </label> : <input id="ENS_TEL" type="tel" name="ENS_TEL" size="50px" maxlength="12" value="<?=$tel?>" onblur="verifmodiftelEns();" /><span id = "erreurmodiftelens" ></span></p>
<p><label for="ENS_DATENAISS"> Modification date de naissance </label> : <input id="ENS_DATENAISS" type="date" name="ENS_DATENAISS" size="50px" maxlength="20" value="<?=$dateN?>" /></p>

    
                    <input type="submit" value="valider"/>
                    <input type="reset"/></p>
                    <p></p>

             </form></center>
      </body>
</html>