<?php
if (isset($_POST['felhasznalonev'], $_POST['jelszo'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=' . $adatbazis['nev'], $adatbazis['felhasznalonev'], $adatbazis['jelszo'],
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Felhasználó keresése
        $sqlSelect = 'SELECT id, csaladnev, utonev, admin FROM felhasznalok WHERE felhasznalonev = :felhasznalonev AND jelszo = sha1(:jelszo)';
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':felhasznalonev' => $_POST['felhasznalonev'], ':jelszo' => $_POST['jelszo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $_SESSION['felhasznalonev'] = $_POST['felhasznalonev'];
            $_SESSION['csaladnev'] = $row['csaladnev'];
            $_SESSION['utonev'] = $row['utonev'];
            if ($row['admin']) {
                $_SESSION['admin'] = $row['admin'];
            }
            if (isset($_POST['atiranyitas'])) {
                header('Location: ' . $gyokerkonyvtar . $_POST['atiranyitas']);
            }
        }
    } catch (PDOException $e) {
        $hibauzenet = 'Hiba: ' . $e->getMessage();
    }
} else {
    header('Location: ' . $gyokerkonyvtar);
}
?>
