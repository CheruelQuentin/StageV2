<div style="text-align:right;padding-bottom:5px;">

<center><h2 id="titre">Liste de proposition de créneaux </h2></center>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<form action="" method="post">
<table class="table">
        <thead>
          <th align="center">Mini-stage</th>
            <th align="center">Date</th>
            <th align="center">Heure début</th>
            <th align="center">Heure fin</th>
            <th align="center">Salle</th>  
            <th align="center">Validé</th>
            <th align="center">Refusé</th>
         </thead>
         <tbody>

<?php
for ($i = 0; $i < count($listeCreneauPropo); $i++) {
    ?>
        <tr><td>
       <center><?= $listeCreneauPropo[$i]["FORM_LIBELLE"] ?></center></td>
       <td><center><?= strftime('%d/%m/%Y',strtotime($listeCreneauPropo[$i]["CRE_DATE"])) ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_HEUREDEB"] ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_HEUREFIN"] ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_SALLE"] ?></center></td>
       <td><input type="checkbox" name="valide"></td>
       <td><input type="checkbox" name="refuse" ></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delForm&id=<?=$listeCreneauPropo[$i]['STA_ID']?>'; }" > Supprimé </button></center></td>
        </tr>
    <?php
}

?>

</tbody></table>
<center><input type="submit" value="Validé" name="sub"></center>
</form>
<?php
if(!empty($_POST["valide"]) && $_POST["valide"]==1) {
        $valide = 1;
    } else {
        $valide = 0;
    }
$requeteSelectCompte= "SELECT * FROM creneau WHERE id=$id";
        $resultatSelectCompte = mysql_query($requeteSelectCompte) or die ($requeteSelectCompte."<BR/>".mysql_error());
        if(mysql_num_rows($resultatSelectCompte) == 1){
            $row = mysql_fetch_row($resultatSelectCompte);
        }
        $session = $row[1];
         
        $requeteUpdateCreneau="UPDATE creneau SET " .
                "cre_id='$session', " .
                "pseudo='', " .
                "passe='".md5($password)."', " .
                "email='".$email."', " .
                "nom='".$nom."', " .
                "prenom='".$prenom."', " .
                "tel='".$tel."', " .
                "abo='".$valide."'" .
                " WHERE " .
                "id=$id AND session = '".$session."'";
        $resultatUpdateCreneau = mysql_query($requeteUpdateCreneau) or die ($requeteUpdateCreneau."<BR/>".mysql_error());
?>
