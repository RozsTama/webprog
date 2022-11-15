<?php
if (isset($_POST['felhasznalonev'], $_POST['jelszo'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=gyakorlat7', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Felhasználó keresése
        $sqlSelect = 'select id, csaladnev, utonev from felhasznalok where felhasznalonev = :felhasznalonev and jelszo = sha1(:jelszo)';
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':felhasznalonev' => $_POST['felhasznalonev'], ':jelszo' => $_POST['jelszo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            $_SESSION['csaladnev'] = $row['csaladnev']; $_SESSION['utonev'] = $row['utonev']; $_SESSION['felhasznalonev'] = $_POST['felhasznalonev'];
        }
    }
    catch (PDOException $e) {
        $errormessage = 'Hiba: ' . $e->getMessage();
    }
}
else {
    header('Location: .');
}
?>
