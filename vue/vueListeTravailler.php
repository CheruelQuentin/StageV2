
<center><h5><?php echo $titre ?></h5></center>
<a href="./?action=addTra">Ajout Travailler</a>
<center><a href="./?action=modifTra">Modification</a></center>
<table align="center" width="80%" border="1">
        <tr>
        	<td align="center">TRA_ENS</td>
            <td align="center">TRA_ETA</td>
           
        </tr>
<?php
for ($i = 0; $i < count($listeTravailler); $i++) {
    ?>
    <tr>
            <td><center><?= $listeTravailler[$i]["TRA_ENS"] ?></center>
            <td><center><?= $listeTravailler[$i]["TRA_ETA"] ?></center>
           

    <?php
}
?>
