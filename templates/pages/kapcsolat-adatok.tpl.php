<?php
if ($hibauzenet == '') {
    echo $uzenet . '<br>Kapott értékek:';
    echo '<pre>';
    echo var_dump($_POST);
    echo '</pre>';
} else {
    echo $hibauzenet;
}
?>
