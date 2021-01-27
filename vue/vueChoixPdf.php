
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body>
         <center><h2>Choix du mini-stage </h2>
       


             <form method="post" action="./controleur/creationPDFLycee.php">
             <table><tr><td>
              
             <label for="STA_ID"> Stage </label> : 
                <select name="STA_ID">
                  <?php
                    for($i=0;$i<sizeof($stage);$i++){ ?> 
                      <option value= <?= $stage[$i]['STA_ID'];?>>
                        <?= getFormationById(getStageById($stage[$i]['STA_ID'])['STA_FORM'])['FORM_LIBELLE'], ' - ', getCreneauById(getStageById($stage[$i]['STA_ID'])['STA_CRE'])['CRE_DATE'];?>

                      </option> 
                  <?php } ?>
                </select>

                    <input type="submit" value="valider"/>
                    <input type="reset"/></p>
                    <p></p>
                    </td></tr></table>
             </form></center>
      </body>
</html>