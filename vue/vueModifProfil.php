<div id="container">
  <br>
  <center><h2 id="titre">Profil</h2></center>
    <center><h2>Formulaire de modification</h2><br><br>
              <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upPro">
<center>             <table><tr><td>   
          
<p><label for="ETA_NOM"style="width:220px;"> Nom établissement *: </label><input id="ETA_NOM" type="text" name="ETA_NOM" size="50px" maxlength="150" value="<?=$nom?>" required onblur="verifnomEtab();" /><div><span id = "erreurnomEtab" ></span></p></div><br>
<p><label for="ETA_ADRESSE" style="width:220px;">Adresse établissement *: </label><input id="ETA_ADRESSE" type="text" name="ETA_ADRESSE" size="50px" maxlength="150" value="<?=$adresse?>" required onblur="verifadresse();" /><div><span id = "erreuradresse" ></span></div></p><br>
<p><label for="ETA_CP"style="width:220px;"> Code postal *: </label><input id="ETA_CP" type="text" name="ETA_CP" size="50px" maxlength="6" pattern="[0-9]{5}" value="<?=$cp?>" required onblur="verifcp();" /><div><span id = "erreurcp" ></span></div></p><br>
<p><label for="ETA_VILLE"style="width:220px;"> Ville établissement *: </label><input id="ETA_VILLE" type="text" name="ETA_VILLE" size="50px" maxlength="150" value="<?=$ville?>" required onblur="verifville();" /><div><span id = "erreurville" ></span></div></p><br>
<p><label for="ETA_MAIL"style="width:220px;"> E-Mail établissement *: </label><input id="ETA_MAIL" type="email" name="ETA_MAIL" size="50px" value="<?=$mail?>" maxlength="150" required onblur="verifmail();" /><div><span id = "erreurmail" ></span></div></p><br>
<p>Civilité du proviseur:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="ETA_PROVCIVIL" value="M." for="M.">M.</label>
<input type="radio" name="ETA_PROVCIVIL" value="Mme." for="Mme.">Mme.</label></center></p>
<br>
<p><label for="ETA_PROVNOM"style="width:220px;"> Nom du proviseur *: </label><input id="ETA_PROVNOM" type="text" name="ETA_PROVNOM" size="50px" maxlength="150"  value="<?=$provnom?>" required onblur="verifnomProv();" /><div><span id = "erreurprovnom" ></span></div></p><br>
<p><label for="ETA_PROVPRENOM"style="width:220px;"> Prénom du proviseur *: </label><input id="ETA_PROVPRENOM" type="text" name="ETA_PROVPRENOM" size="50px" maxlength="150" value="<?=$provprenom?>" required onblur="verifprenomProv();" /><div><span id = "erreurprovprenom" ></span></div></p><br>
<p><label style="width:220px;" for="ETA_TEL"> Téléphone *: </label><input id="ETA_TEL" type="tel" name="ETA_TEL" size="50px" maxlength="14" required pattern=[0-9]{10}  value="<?=$tel?>" onblur="veriftel();" /><div><span id = "erreurtel" ></span></div></p><br>
<p><label for="ETA_SECU"style="width:220px;"> N° Assurance *: </label><input id="ETA_SECU" type="int" value="<?=$secu?>" name="ETA_SECU" size="50px" maxlength="15"/>
<br><br>
<p>Type de sécu*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="ETA_NOMSECU" value="MAE"  for="MAE"> MAE</label>
<input type="radio" name="ETA_NOMSECU" value="MAIF"  for="MAIF"> MAIF</label>
</p><br>


             </tr></td></table>

            <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
              <p>* Champs obligatoire</p></center>
             </form></center>
           
      </body>
</html>