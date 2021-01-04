  <!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modificaion"/>
            <meta charset="utf-8"/>
      </head>
      <body>
         <center><h2>Modification Etablissement </h2>
             <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upEta">


<input id="ETA_ID" type="hidden" name="ETA_ID" size="50px" maxlength="20" value="<?=$_GET['id']?>" />
<p><label for="ETA_NOM"> Modification nom </label> : <input id="ETA_NOM" type="text" name="ETA_NOM" size="50px" maxlength="150" value="<?=$nom?>" onblur="verifmodifnomEtab();" /><span id = "erreurmodifnomEtab" ></span></p>
<p><label for="ETA_VILLE"> Modification ville </label> : <input id="ETA_VILLE" type="text" name="ETA_VILLE" size="50px" maxlength="150" value="<?=$ville?>"  onblur="verifmodifville();" /><span id = "erreurmodifville" ></span></p>
<p><label for="ETA_ADRESSE"> Modification adresse </label> : <input id="ETA_ADRESSE" type="text" name="ETA_ADRESSE" size="50px" maxlength="150" value="<?=$adresse?>" onblur="verifmodifadresse();" /><span id = "erreurmodifadresse" ></span></p>
<p><label for="ETA_CP"> Modification code postal </label> : <input id="ETA_CP" type="text" name="ETA_CP" size="50px" maxlength="6" value="<?=$CP?>" onblur="verifmodifcp();" /><span id = "erreurmodifcp" ></span></p>
<p><label for="ETA_MAIL"> Modification mail </label> : <input id="ETA_MAIL" type="text" name="ETA_MAIL" size="50px" maxlength="150" value="<?=$mail?>" onblur="verifmodifmail();" /><span id = "erreurmodifmail" ></span></p>
<p><label for="ETA_PROVCIVIL"> Modification civilité du proviseur </label> : <input id="ETA_PROVCIVIL" type="text" name="ETA_PROVCIVIL" size="50px" maxlength="3" value="<?=$provcivil?>" /></p>
<p><label for="ETA_PROVNOM"> Modification nom proviseur </label> : <input id="ETA_PROVNOM" type="text" name="ETA_PROVNOM" size="50px" maxlength="150" value="<?=$provnom?>" onblur="verifmodifProvnom();" /><span id = "erreurmodifprovnom" ></span></p>
<p><label for="ETA_PROVPRENOM"> Modification prenom proviseur </label> : <input id="ETA_PROVPRENOM" type="text" name="ETA_PROVPRENOM" size="50px" maxlength="150" value="<?=$provprenom?>" onblur="verifmodifProvprenom();" /><span id = "erreurmodifprovprenom" ></span></p>
<p><label for="ETA_TEL"> Modification téléphone </label> : <input id="ETA_TEL" type="tel" name="ETA_TEL" size="50px" maxlength="12" value="<?=$tel?>" onblur="verifmodiftel();" /><span id = "erreurmodiftel" ></span></p>

    
                    <input type="submit" value="valider"/>
                    <input type="reset"/></p>
                    <p></p>

             </form></center>
      </body>
</html>
