<?php
if (isset($_POST['nev'], $_POST['email'], $_POST['szoveg'])) {
    $hibauzenet = '';
    if (strlen($_POST['nev']) < 5) {
        $hibauzenet .= 'Hibás név: ' . $_POST['nev'] . '<br>';
    }
    $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
    if (!preg_match($re, $_POST['email'])) {
        $hibauzenet .= 'Hibás email: ' . $_POST['email'] . '<br>';
    }
    if ($_POST['szoveg'] == '') {
        $hibauzenet .= 'Hibás szöveg: ' . $_POST['szoveg'] . '<br>';
    }

    if ($hibauzenet == '') {
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=' . $adatbazisnev, 'root', '',
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
