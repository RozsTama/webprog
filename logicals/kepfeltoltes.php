<?php
$uzenetek = array();
if (isset($_POST['kuld'])) {
    foreach ($_FILES as $fajl) {
        if ($fajl['error'] != 4) {
            if (!in_array($fajl['type'], $galeria['mediatipusok'])) {
                $uzenetek[] = 'Nem megfelelő típus: ' . $fajl['name'];
            } else if ($fajl['error'] == 1 || $fajl['error'] == 2 || $fajl['size'] > $galeria['maxmeret']) {
                $uzenetek[] = 'Túl nagy állomány: ' . $fajl['name'];
            } else if ($fajl['error'] == 0) {
                $vegsohely = './' . $galeria['konyvtar'] . strtolower($fajl['name']);
                if (file_exists($vegsohely)) {
                    $uzenetek[] = 'Már létezik: ' . $fajl['name'];
                }
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenetek[] = 'Sikeres feltöltés: ' . $fajl['name'];
                }
            } else {
                $uzenetek[] = 'Sikertelen feltöltés: ' . $fajl['name'] . ' – Hibakód: ' . $fajl['error'];
            }
        }
    }
}
?>
