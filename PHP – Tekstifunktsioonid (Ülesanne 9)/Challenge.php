<?php
$nimi = $_GET['nimi'];
$nimi = strtolower($nimi);
$nimi = uscfirst($nimi);
echo 'Tere, '.$nimi.'!';
echo '<hr>';


$sisend = $_GET['sisend'];
for ($indeks = 0; $indeks < strlen($sisend); $indeks++) {
    $symbol = strtoupper($sisend[$indeks]);
    echo $symbol. '.';
}
echo '<hr>';


?>
<a href=""></a>
