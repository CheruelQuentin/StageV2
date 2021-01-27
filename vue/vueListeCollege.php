
<center><h5>Liste des collèges </h5></center>
<table align="center" width="80%" border="1">
        <tr>
        	<td align="center">ETA_ID</td>

        </tr>
<?php
for ($i = 0; $i < count($listeCollege); $i++) {
    ?>
            <td><center><?= $listeCollege[$i]["ETA_ID"] ?></center>


    <?php
}
?>
