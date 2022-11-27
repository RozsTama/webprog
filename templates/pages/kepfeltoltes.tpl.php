<h2>Feltöltés a galériába:</h2>
<?php
if (!empty($uzenet))
{
    echo '<ul>';
    foreach ($uzenet as $u) {
        echo '<li>' . $u . '</li>';
    }
    echo '</ul>';
}
?>
<form action="<?= $gyokerkonyvtar ?>kepfeltoltes" method="post" enctype="multipart/form-data">
    <label>Első:
        <input type="file" name="elso" required><br>
    </label>
    <label>Második:
        <input type="file" name="masodik"><br>
    </label>
    <label>Harmadik:
        <input type="file" name="harmadik"><br>
    </label>
    <input class="gomb" type="submit" name="kuld">
</form>
