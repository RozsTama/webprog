<?php
$kepek = array();
$olvaso = opendir('./' . $galeria['konyvtar']);
while (($fajl = readdir($olvaso)) !== false) {
    if (is_file('./' . $galeria['konyvtar'] . $fajl)) {
        $vege = strtolower(pathinfo('./' . $galeria['konyvtar'] . $fajl, PATHINFO_EXTENSION));
        if (in_array($vege, $galeria['fajltipusok'])) {
            $kepek[$fajl] = filemtime('./' . $galeria['konyvtar'] . $fajl);
        }
    }
}
closedir($olvaso);
?>
