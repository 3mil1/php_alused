<style>
    table, tr, th, td {
        border: 1px solid #333;
        border-collapse: collapse;
        text-align: center;
    }
</style>

<?php

$andmeFail = 'soiduaeg.csv';

$algusAeg = $_GET['algus_aeg'];
$loppAeg = $_GET['lopp_aeg'];

if(strlen($algusAeg) == 0 or strlen($loppAeg) == 0) {
    echo '<a href="FormSoiduaeg.php.php">Sisesta kõik andmed!</a>';
}  else {
    if(strlen($algusAeg) != 5 or strlen($loppAeg) != 5) {
        echo '<a href="FormSoiduaeg.php.php">Sisesta andmed õiges formaadis!</a>';
    } else {
        // soiduaeg
       $soiduAeg =  date ("H:i:s", strtotime ($loppAeg)-strtotime ($algusAeg));

    }
}

$rida = $algusAeg.";".$loppAeg.";".$soiduAeg."\n";
$Salvestatud = file_put_contents($andmeFail, $rida, FILE_APPEND | LOCK_EX);

//$kuvaFile = file_get_contents('./soiduaeg.csv', true);
//echo $kuvaFile;


//Salvesta

//if (file_exists($andmeFail)) {
//    header('Content-Description: File Transfer');
//    header('Content-Type: application/octet-stream');
//    header('Content-Disposition: attachment; filename="'.basename($andmeFail).'"');
//    header('Expires: 0');
//    header('Cache-Control: must-revalidate');
//    header('Pragma: public');
//    header('Content-Length: ' . filesize($andmeFail));
//    readfile($andmeFail);
//    exit;
//}

