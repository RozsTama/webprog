<?php
$gyokerkonyvtar = '/madarpark/';

$adatbazis = array(
    'nev' => 'madarpark',
    'felhasznalonev' => 'root',
    'jelszo' => ''
);

$ablakcim = 'Hortobágyi Madárpark';

$lablec = '&copy;&nbsp;Copyright ' . date('Y') . '. – Madárkórház Alapítvány';

$oldalak = array(
    'cimlap' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1, 1, 1), 'jog' => 0),
    'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1, 1, 1), 'jog' => 0),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1, 1, 1), 'jog' => 0),
    'kepfeltoltes' => array('fajl' => 'kepfeltoltes', 'szoveg' => 'Képfeltöltés', 'menun' => array(0, 0, 0), 'jog' => 1),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1, 1, 1), 'jog' => 0),
    'kapcsolat-adatok' => array('fajl' => 'kapcsolat-adatok', 'szoveg' => 'Kapcsolat', 'menun' => array(0, 0, 0), 'jog' => 0),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(0, 0, 1), 'jog' => 2),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1, 0, 0), 'jog' => 0),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0, 1, 1), 'jog' => 0),
    'belep' => array('fajl' => 'belep', 'szoveg' => 'Belépés', 'menun' => array(0, 0, 0), 'jog' => 0),
    'regisztracio' => array('fajl' => 'regisztracio', 'szoveg' => 'Regisztráció', 'menun' => array(0, 0, 0), 'jog' => 0)
);

$nem_keresheto = array(
    '404' => array('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!'),
    'jogosultsag-szukseges' => array('fajl' => 'jogosultsag-szukseges', 'szoveg' => 'Jogosultság szükséges')
);

$galeria = array(
    'konyvtar' => 'images/galeria/',
    'fajltipusok' => array('jpg', 'png'),
    'mediatipusok' => array('image/jpeg', 'image/png'),
    'datumforma' => 'Y.m.d. H:i',
    'maxmeret' => 500 * 1024
);
?>
