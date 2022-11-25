<?php
include('./includes/config.inc.php');

$url = $_SERVER['REQUEST_URI'];
$stringTomb = explode('/', $url);
$oldal = $stringTomb[count($stringTomb) - 1];

session_start();

if (empty($oldal)) {
    $keres = $oldalak['/'];
}
else {
    if (isset($oldalak[$oldal]) && file_exists("./templates/pages/{$oldalak[$oldal]['fajl']}.tpl.php") &&
        ($oldalak[$oldal]['jog'] < 2 || isset($_SESSION['admin']))) {
        $keres = $oldalak[$oldal];
    }
    else {
        $keres = $hiba_oldal;
        header('HTTP/1.0 404 Not Found');
    }
}

include('./templates/index.tpl.php');
?>
