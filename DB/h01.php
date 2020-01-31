<?php
// lisame andmebaasitootlus funktsoionid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
// lisan valjundi kasutamise faili
require_once 'valjund.php';

// uhendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

// vaatame andmed
$sql = 'Select * Kool, Kokku FROM koolid2015';
$result = getData($sql, $ikt);
echo '<h1>Harjutus 01</h1>';
echo 'Ridu kokku:'.count($result).'<br>';
tabel($result, array('Kool', '2015'));