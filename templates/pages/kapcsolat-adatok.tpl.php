<?php
if (!$hibauzenetek) {
    echo $uzenet . "<br>\nKapott értékek:\n";
    echo "<pre>\n";
    echo var_dump($_POST);
    echo "</pre>\n";
} else {
    foreach ($hibauzenetek as $u) {
        echo $u . "<br>\n";
    }
}
?>
