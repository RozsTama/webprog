<?php
if (isset($_POST['nev'], $_POST['email'], $_POST['szoveg'])) {
    $hibauzenetek = array();
    if (strlen($_POST['nev']) < 5) {
        $hibauzenetek[] = 'Hibás név: ' . $_POST['nev'];
    }
    $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    if (!preg_match($re, $_POST['email'])) {
        $hibauzenetek[] = 'Hibás e-mail: ' . $_POST['email'];
    }
    if ($_POST['szoveg'] == '') {
        $hibauzenetek[] = 'Hibás szöveg: ' . $_POST['szoveg'];
    }

    if (!$hibauzenetek) {
        try {
            $dbh = new PDO('mysql:host=' . $adatbazis['szerver'] . ';dbname=' . $adatbazis['nev'], $adatbazis['felhasznalonev'], $adatbazis['jelszo'],
                            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

            $sqlInsert = 'INSERT INTO uzenetek (felhasznalonev, nev, email, szoveg) VALUES (:felhasznalonev, :nev, :email, :szoveg)';
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(':felhasznalonev' => (isset($_SESSION['felhasznalonev']) ? $_SESSION['felhasznalonev'] : ''), ':nev' => $_POST['nev'],
                                 ':email' => $_POST['email'], ':szoveg' => $_POST['szoveg']));
            if ($count = $stmt->rowCount()) {
                $uzenet = 'Az üzenet elküdése sikeres.';
            } else {
                $uzenet = 'Az üzenet elküdése sikertelen.';
            }
        } catch (PDOException $e) {
            $uzenet = 'Hiba: ' . $e->getMessage();
        }
    }
} else {
    header('Location: ' . $gyokerkonyvtar);
}
?>
