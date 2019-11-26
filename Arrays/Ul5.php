<?php
$ained = array('Matemaatika','Vene keel','Eesti keel','Inglise keel','Fuusika');
sort($ained);
foreach($ained
        as $aine){
    echo "$aine <br>";
}
echo "<br>";
$nimed = array(' Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);
echo "Nimed: ".count($nimed)."<br>";
echo  "Pallivisked: ".array_sum($pallivisked)."<br>";
echo "Max: ".max($pallivisked)."<br>";
$Tulemused = array_combine($nimed, $pallivisked);
echo "Parim tulemus: " ;
print_r(max($Tulemused))."<br>";
$max = array_keys($Tulemused,max($Tulemused))[0];
echo $max;
echo "<br>";
$Raamatud = array(
    $Raamat1 = array(
        'Pealkiri'=> 'Helmelõimed elulõngal',
        'Autor'=> 'Karl Puhvel',
        'Zanr' => 'biograafia',
        'Ilmumisaasta'=> 2013
    ),
    $Raamat2 = array(
        'Pealkiri'=> 'Ilulõngal',
        'Autor'=> 'Karl Puh',
        'Zanr' => 'comedy',
        'Ilmumisaasta'=> 1990
    ),
    $Raamat3 = array(
        'Pealkiri'=> 'Gena',
        'Autor'=> 'Gena Galkin',
        'Zanr' => 'tragedy',
        'Ilmumisaasta'=> 1997
    )
);

sort($Raamatud);
reset($Raamatud);
echo var_dump($Raamatud);
