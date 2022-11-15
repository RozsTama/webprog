<?php
if ($_SESSION) {
    $data = $_SESSION;
    session_unset();
    session_destroy();
}
else {
    header('Location: .');
}
?>
