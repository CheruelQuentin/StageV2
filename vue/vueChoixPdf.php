
<html>
      <head>
            <center><h2 id="titre">Génération de pdf</h2></center>
            <meta name="description" content="Génération de pdf"/>
            <meta charset="utf-8"/>
      </head>
      <body>
         <center><h2>Choix du mini-stage </h2>
       

<br>
             <form method="post" action="./controleur/creationPDFLycee.php" TARGET="_BLANK">
             <table><tr><td>
              
             <label for="STA_ID"> <center>Stage</center></label>
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