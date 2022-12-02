<h2>Feltöltés a galériába:</h2>
<?php
if ($uzenet)
{
    echo "<ul>\n";
    foreach ($uzenet as $u) {
        echo "    <li>" . $u . "</li>\n";
    }
    echo "</ul>\n";
}
?>
<form action="<?= $gyokerkonyvtar ?>kepfeltoltes" method="post" enctype="multipart/form-data">
    <div class="form-elem"><label>Első:</label>
        <input type="file" name="elso" required>
    </div>
    <div class="form-elem"><label>Második:</label>
        <input type="file" name="masodik">
    </div>
    <div class="form-elem"><label>Harmadik:</label>
        <input type="file" name="harmadik">
    </div>
    <div class="form-elem">
        <input class="gomb" type="submit" name="kuld">
    </div>
</form>
