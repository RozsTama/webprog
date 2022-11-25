<?php
if (isset($_SESSION['felhasznalonev'])) {
    $data = $_SESSION;
    session_unset();
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 43200, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }
    session_destroy();
}
else {
    header('Location: ' . $gyokerkonyvtar);
}
?>
