<?php
echo date('d.m.Y G:i' , time());
echo '<br>';
$dayweek  = array(
    "0"=>"Esmp" ,
    "1"=>"Teisip" ,
    "2"=>"Kolmp" ,
    "3"=>"Nejlp" ,
    "4"=>"Reede" ,
    "5"=>"Laup" ,
    "6"=>"Puh" );

echo( $dayweek[date("n", strtotime($_POST["date1"]))]);
echo "<br>";


$kuud  = array(
    "1"=>"Jan" ,
    "2"=>"Veeb" ,
    "3"=>"Marts" ,
    "4"=>"Aprill" ,
    "5"=>"Mai" ,
    "6"=>"Juun" ,
    "7"=>"Juul",
    "8"=>"aug" ,
    "9"=>"sept" ,
    "10"=>"okt" ,
    "11"=>"nov" ,
    "12"=>"dets");

$month = $kuud[date("n")];

echo $month;

echo '<br>';


echo 'Minu sunnipaevani on jaanud: ';
$aDate = time();
$bDate = strtotime("23.01.2020");

$datediff = $bDate - $aDate;
echo floor($datediff / (60 * 60 * 24));
echo '<br>';
$tema = ' 06.11.1988' ;
$mina = '23.01.1997' ;
echo $mina - $tema;

echo "<br>";
//juubel

$jargmineAaata = date('Y')+1;
$minuSynniKuupaev = strtotime('27 January 1997');
$minuSynnipaevJargmiselAastal = strtotime('27 January'.$jargmineAaata);

$vanusSekundites = $minuSynnipaevJargmiselAastal - $minuSynniKuupaev;
$vanusAastates = (int)($vanusSekundites / (60 * 60 * 24 * 30 * 12));
if($vanusAastates % 5 == 0){
    echo $jargmineAaata.' sul on juubel';

} else {
    echo $jargmineAaata.'sul pole juubelit';
}

