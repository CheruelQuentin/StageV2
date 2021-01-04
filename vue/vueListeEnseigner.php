
<center><h5><?php echo $titre ?></h5></center>
<center><a href="./?action=addEnsr">Ajouter</a></center>
<center><a href="./?action=modifEnsr">Modification</a></center>
<table align="center" width="80%" border="1">
        <tr>
        	<td align="center">ENSR_MAT</td>
            <td align="center">ENSR_ENS</td>
            

        </tr>
<?php
for ($i = 0; $i < count($listeEnseigner); $i++) {
    ?><tr>
            <td><center><?= $listeEnseigner[$i]["ENSR_MAT"] ?></center></td>
            <td><center><?= $listeEnseigner[$i]["ENSR_ENS"] ?></center></td>



    <?php
}
?></tr></table>
<center><a href="./?action=delEnsr">Supprimer Enseigner</a></center>