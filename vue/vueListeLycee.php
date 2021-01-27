<br>
<center><h5>Liste des lycées </h5></center><br>
<table align="center" width="80%" border="1">
        <tr>
        	<td align="center">ETA_ID</td>

        </tr>
<?php
for ($i = 0; $i < count($listeLycee); $i++) {
    ?>
            <td><center><?= $listeLycee[$i]["ETA_ID"] ?></center>


    <?php
}
?>
