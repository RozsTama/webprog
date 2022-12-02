<?php
$uzenet = array();
if (isset($_POST['kuld'])) {
    foreach ($_FILES as $fajl) {
        if ($fajl['error'] == 4) {

        } else if (!in_array($fajl['type'], $galeria['mediatipusok'])) {
            $uzenet[] = 'Nem megfelelő típus: ' . $fajl['name'];
        } else if ($fajl['error'] == 1 || $fajl['error'] == 2 || $fajl['size'] > $galeria['maxmeret']) {
            $uzenet[] = 'Túl nagy állomány: ' . $fajl['name'];
        } else {
            $vegsohely = './' . $galeria['konyvtar'] . strtolower($fajl['name']);
            if (file_exists($vegsohely)) {
                $uzenet[] = 'Már létezik: ' . $fajl['name'];
            }
            else {
                move_uploaded_file($fajl['tmp_name'], $vegsohely);
                $uzenet[] = 'Ok: ' . $fajl['name'];
            }
        }
    }
}
?>
