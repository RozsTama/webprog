<?php
if (isset($_POST['csaladnev'], $_POST['utonev'], $_POST['felhasznalonev'], $_POST['jelszo'])) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=' . $adatbazis['nev'], $adatbazis['felhasznalonev'], $adatbazis['jelszo'],
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

        // Létezik már a felhasználónév?
        $sqlSelect = 'SELECT id FROM felhasznalok WHERE felhasznalonev = :felhasznalonev';
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':felhasznalonev' => $_POST['felhasznalonev']));
        if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $uzenet = 'A felhasználónév már foglalt!';
            $ujra = true;
        } else {
            // Ha nem létezik, akkor regisztráljuk
            $sqlInsert = 'INSERT INTO felhasznalok (csaladnev, utonev, felhasznalonev, jelszo)
                          VALUES (:csaladnev, :utonev, :felhasznalonev, :jelszo)';
            $stmt = $dbh->prepare($sqlInsert);
            $stmt->execute(array(':csaladnev' => $_POST['csaladnev'], ':utonev' => $_POST['utonev'],
                                 ':felhasznalonev' => $_POST['felhasznalonev'], ':jelszo' => sha1($_POST['jelszo'])));
            if ($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $uzenet = 'A regisztrációja sikeres.<br>Azonosítója: ' . $newid;
                $ujra = false;
            } else {
                $uzenet = 'A regisztráció nem sikerült.';
                $ujra = true;
            }
        }
    } catch (PDOException $e) {
        $uzenet = 'Hiba: ' . $e->getMessage();
        $ujra = true;
    }
} else {
    header('Location: ' . $gyokerkonyvtar);
}
?>
