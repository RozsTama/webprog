<?php
session_start();
$most = time();
if (isset($_SESSION['lejarat_idopontja']) && $most > $_SESSION['lejarat_idopontja']) {
    session_unset();
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 43200, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
    session_destroy();
    session_start();
}
$_SESSION['lejarat_idopontja'] = $most + 1200;

include('./includes/config.inc.php');

$oldal = strtok(substr($_SERVER['REQUEST_URI'], strlen($gyokerkonyvtar)), '?');

if ($oldal == '') {
    $oldal = 'cimlap';
}
if (isset($oldalak[$oldal]) && file_exists('./templates/pages/' . $oldalak[$oldal]['fajl'] . '.tpl.php')) {
    if ($oldalak[$oldal]['jog'] > 0 && !isset($_SESSION['felhasznalonev'])) {
        $keres = $oldalak['belepes'];
        $atiranyitas = $oldal;
    } else if ($oldalak[$oldal]['jog'] > 1 && !isset($_SESSION['admin'])) {
        $keres = $nem_keresheto['jogosultsag-szukseges'];
    } else {
        $keres = $oldalak[$oldal];
    }
} else {
    $keres = $nem_keresheto['404'];
    http_response_code(404);
}

include('./templates/index.tpl.php');
?>