<?php
?>
<h1>Tellimine</h1>

<?php
function keraRuumala($raadius){
    $ruumala = 4 * pi() * pow($raadius, 2);
    return round($ruumala,2);
}

function koonuseRuumala($raadius), $korgus{
    $ruumala = (1 / 3) * pi() * pow($raadius,2) * $korgus;
    return round($ruumala,2);
}

function silindriRuumala($raadius), $korgus{
$ruumala = pi() * pow($raadius,2) * $korgus;
    return round($ruumala,2);
}

$keraRaadius = $_GET['Kera.r'];

$koonuseRaadius = $_GET['K.raadius'];
$koonuseKorgus = $_GET['K.korgus'];

$silindriRaadius = $_GET['S.r'];
$silindriKorgus = $_GET['S.k'];


echo 'Kera raadus' = '.$keraRaadius.' ja ruumala = 'keraRuumala($keraRaarius)'.'<br>';
