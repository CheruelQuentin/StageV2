  <!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modificaion"/>
            <meta charset="utf-8"/>
      </head>
      <body>
<div id="container">
  <br>
  <center><h2 id="titre">Gestion des établissement</h2></center>
    <center><h2>Modification d'établissement</h2><br><br>
             <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upEta">


<input id="ETA_ID" type="hidden" name="ETA_ID" size="50px" maxlength="20" value="<?=$_GET['id']?>" />
<center>
  <table><tr><td>
<p><label for="ETA_NOM">Nom *: </label>  <input id="ETA_NOM" type="text" name="ETA_NOM" size="50px" maxlength="150" value="<?=$nom?>" required onblur="verifmodifnomEtab();" /><div><span id = "erreurmodifnomEtab" ></span></div><br>


<p><label for="ETA_VILLE">Ville *: </label> <input id="ETA_VILLE" type="text" name="ETA_VILLE" size="50px" maxlength="150" value="<?=$ville?>"  required onblur="verifmodifville();" /><div><span id = "erreurmodifville" ></span></div><br>


<p><label for="ETA_ADRESSE">Adresse *:</label>  <input id="ETA_ADRESSE" type="text" name="ETA_ADRESSE" size="50px" maxlength="150" value="<?=$adresse?>" required onblur="verifmodifadresse();" /><div><span id = "erreurmodifadresse" ></span></div><br>


<p><label for="ETA_CP">Code postal *:</label>  <input id="ETA_CP" type="text" name="ETA_CP" size="50px" maxlength="6" value="<?=$CP?>" onblur="verifmodifcp();" /><div><span id = "erreurmodifcp" ></span></div><br>

<p><label for="ETA_MAIL">Mail *:</label>  <input id="ETA_MAIL" type="text" name="ETA_MAIL" size="50px" maxlength="150" required value="<?=$mail?>"  onblur="verifmodifmail();" /><div><span id = "erreurmodifmail" ></span></div><br>

<p>Civilité du proviseur:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="ETA_PROVCIVIL" value="M." for="M.">M.</label>
<input type="radio" name="ETA_PROVCIVIL" value="Mme." for="Mme.">Mme.</label></center></p><BR>


<p><label for="ETA_PROVNOM">Nom proviseur *:</label>  <input id="ETA_PROVNOM" type="text" name="ETA_PROVNOM" size="50px" maxlength="150" value="<?=$provnom?>" required onblur="verifmodifProvnom();" /><div><span id = "erreurmodifprovnom" ></span></div><br>


<p><label for="ETA_PROVPRENOM">Prénom proviseur *:</label>  <input id="ETA_PROVPRENOM" type="text" name="ETA_PROVPRENOM" size="50px" maxlength="150" value="<?=$provprenom?>" required  onblur="verifmodifProvprenom();" /><div><span id = "erreurmodifprovprenom" ></span></div><br>


<p><label for="ETA_TEL">Téléphone *:</label>  <input id="ETA_TEL" type="int" name="ETA_TEL" size="50px" maxlength="14" required value="<?=$tel?>" onblur="verifmodiftel();" /><div><span id = "erreurmodiftel" ></span></div><br>
</p>

<p><label for="ETA_SECU">Sécu *:</label>  <input id="ETA_SECU" type="int" name="ETA_SECU" size="50px" maxlength="15" required value="<?=$numSecu?>"  /><br>

<br>
<p>Type de sécu*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="ETA_NOMSECU" value="MAE"  for="MAE"> MAE</label>

<input type="radio" name="ETA_NOMSECU" value="MAIF"  for="MAIF"> MAIF</label>
</p><br>

  </td></tr></table>
  <p>* Champ obligatoire</p>
    <br>
                   <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
                    
                    <p></p>
 </td></tr></table>
           </center>

             </form>

      </body>
</html>
