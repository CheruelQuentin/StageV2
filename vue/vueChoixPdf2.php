
<html>
      <head>
            <center><h2 id="titre">Génération de pdf</h2></center>
            <meta name="description" content="Génération de pdf"/>
            <meta charset="utf-8"/>
      </head>
      <body>
         <center><h2>Choix du mini-stage </h2>
       


             <form method="post" action="./controleur/creationPDFLycee2.php" TARGET="_BLANK">
             <table><tr><td>
              
             <label for="ETA_ID"> Etablissement </label> : 
                <select name="ETA_ID">
                  <?php
                    for($i=0;$i<sizeof($etablissement);$i++){ ?> 
                      <option value= <?= $etablissement[$i]['ETA_ID'];?>>
                        <?= getEtablissementById($etablissement[$i]['ETA_ID'])['ETA_NOM'], ' - ', getEtablissementById($etablissement[$i]['ETA_ID'])['ETA_VILLE'];?>

                      </option> 
                  <?php } ?>
                </select>
              </td>


</tr></table>
<table><tr>
              <td>

                <label for="STA_ID">Stage</label>: 
                <select name="STA_ID">
                  <?php
                    for($i=0;$i<sizeof($stage);$i++){ ?> 
                      <option value= <?= $stage[$i]['STA_ID'];?>>
                        <?= getFormationById(getStageById($stage[$i]['STA_ID'])['STA_FORM'])['FORM_LIBELLE'], ' - ', getCreneauById(getStageById($stage[$i]['STA_ID'])['STA_CRE'])['CRE_DATE'];?>

                      </option> 
                  <?php } ?>
                </select>
<br><br>
                   <center><input type="submit" style="padding : 10px; width: 100px" value="Valider"/></center>
                    
                    <p></p>
                    </td></tr></table>
             </form></center>
      </body>
</html>