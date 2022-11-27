<?php
$kepek = array();
$olvaso = opendir($_SERVER['DOCUMENT_ROOT'] . $galeria['konyvtar']);
while (($fajl = readdir($olvaso)) !== false) {
    if (is_file($_SERVER['DOCUMENT_ROOT'] . $galeria['konyvtar'] . $fajl)) {
        $vege = strtolower(pathinfo($_SERVER['DOCUMENT_ROOT'] . $galeria['konyvtar'] . $fajl, PATHINFO_EXTENSION));
        if (in_array($vege, $galeria['fajltipusok'])) {
            $kepek[$fajl] = filemtime($_SERVER['DOCUMENT_ROOT'] . $galeria['konyvtar'] . $fajl);
        }
    }
}
closedir($olvaso);
?>
