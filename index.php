<?php
include('./includes/config.inc.php');

$oldal = strtok(substr($_SERVER['REQUEST_URI'], strlen($gyokerkonyvtar)), '?');

echo $_SERVER['REQUEST_URI'] . '   ' . $oldal;

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

if (empty($oldal)) {
    $keres = $oldalak['/'];
}
else {
    if ($oldal != '/' && isset($oldalak[$oldal]) && file_exists('./templates/pages/' . $oldalak[$oldal]['fajl'] . '.tpl.php') &&
        ($oldalak[$oldal]['jog'] < 2 || isset($_SESSION['admin']))) {
        if ($oldalak[$oldal]['jog'] == 1 && !isset($_SESSION['felhasznalonev'])) {
            $keres = $oldalak['bejelentkezes'];
            $atiranyitas = $oldal;
        }
        else {
            $keres = $oldalak[$oldal];
        }
    }
    else {
        $keres = $hiba_oldal;
        http_response_code(404);
    }
}

include('./templates/index.tpl.php');
?>
