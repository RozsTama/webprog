<table>
<?php
try {
    $dbh = new PDO('mysql:host=' . $adatbazis['szerver'] . ';dbname=' . $adatbazis['nev'], $adatbazis['felhasznalonev'], $adatbazis['jelszo'],
                    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

    $sqlSelect = 'SELECT idopont, felhasznalonev, szoveg FROM uzenetek';
    $sth = $dbh->prepare($sqlSelect);
    $sth->execute();
    if ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        echo "    <thead>\n        <tr>\n";
        foreach ($row as $col => $value) {
            echo "            <td>" . $col . "</td>\n";
        }
        echo "        </tr>\n    </thead>\n";
        do {
            echo "    <tr>\n";
            foreach ($row as $col => $value) {
                echo "        <td>" . ($value != '' ? htmlspecialchars($value) : 'Vendég') . "</td>\n";
            }
            echo "    </tr>\n";
        } while ($row = $sth->fetch(PDO::FETCH_ASSOC));
    }
} catch (PDOException $e) {
    echo 'Hiba: ' . $e->getMessage();
}
?>
</table>
