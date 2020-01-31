<?php
// lisame andmebaasitootlus funktsoionid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
// lisan valjundi kasutamise faili
require_once 'valjund.php';

// uhendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);
// naitame otsingu vorm
otsinguVorm();
// kasutame vormi kaudu tulnud andemd
if(isset($_get['osti'])){
    $sql = 'Select 2015,Kool From koolid2015 where Kool like "%.$osti.%"';
    $result = getData($sql, $ikt);
    
    if(!result){
    $pealkirjad = array(');
}