<?php
$gyokerkonyvtar = '/feladat/';

$ablakcim = array(
    'cim' => 'Mini honlap Kft.'
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
    'cim' => 'Mini honlap'
);

$lablec = array(
    'copyright' => 'Copyright ' . date('Y') . '.',
    'ceg' => 'Mini honlap Kft.'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1, 1, 1), 'jog' => 0),
    'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1, 1, 1), 'jog' => 0),
    'kepgaleria' => array('fajl' => 'kepgaleria', 'szoveg' => 'Képgaléria', 'menun' => array(1, 1, 1), 'jog' => 0),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1, 1, 1), 'jog' => 1),
    'kapcsolat_adatok' => array('fajl' => 'kapcsolat_adatok', 'szoveg' => 'Kapcsolat', 'menun' => array(0, 0, 0), 'jog' => 1),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(0, 0, 1), 'jog' => 2),
    'bejelentkezes' => array('fajl' => 'bejelentkezes', 'szoveg' => 'Bejelentkezés', 'menun' => array(1, 0, 0), 'jog' => 0),
    'kijelentkezes' => array('fajl' => 'kijelentkezes', 'szoveg' => 'Kijelentkezés', 'menun' => array(0, 1, 1), 'jog' => 1),
    'bejelentkezes_info' => array('fajl' => 'bejelentkezes_info', 'szoveg' => 'Bejelentkezés', 'menun' => array(0, 0, 0), 'jog' => 0),
    'regisztracio' => array('fajl' => 'regisztracio', 'szoveg' => 'Regisztráció', 'menun' => array(0, 0, 0), 'jog' => 0)
);

$hiba_oldal = array('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>
