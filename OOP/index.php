<?php

$city = [
    ['People' => 11, 'location' => 'Нью-Йорк', 'city'=> 'Нью-Йорк' ] ,
    ['People' => 9, 'location' => 'Калифорния', 'city'=> 'Лос-Анджелес' ],
    ['People' => 8, 'location' => 'Иллинойс', 'city'=> 'Чикаго' ],
    ['People' => 7, 'location' => 'Техас', 'city'=> 'Хьюстон'],
    ['People' => 6, 'location' => 'Пенсильвания', 'city'=> 'Филадельфия'],
    ['People' => 5, 'location' => 'Аризона', 'city'=> 'Феникс'],
    ['People' => 4, 'location' => 'Техас', 'city'=> 'Сан-Антонио'],
    ['People' => 3, 'location' => 'Калифорния', 'city'=> 'Диего'],
    ['People' => 2, 'location' => 'Техас', 'city'=> 'Даллас'],
    ['People' => 1, 'location' => 'Калифорния', 'city'=> 'Хосе']
];

print_r($city);



// Функция сравнения
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
echo '<br><hr>';

uasort($city, 'cmp');

//echo '<prе>';
//print_r($city);
//echo '</prе>';

// Правильно
foreach ($city as $item => $value){
    print  'В ';
    foreach ($value as $index => $info){
        print  '<tr> <td>'.$info.'</tr> </td>';

    }
print '<br>';
}

echo '<br><hr>';

foreach ($city as $key => $value){
   foreach ($value as $mesto => $gorod){
       print "$key $mesto $gorod.\n";
   }

}
echo '<br><hr>';

for ($row = 0; $row < 10; $row++) {
    echo 'В '. $city[$row]["city"]." штат ".$city[$row]["location"]
        ." проживает ". $city[$row]["People"].' людей';
    echo "<br>";
}

echo '<br><hr>';

for ($row = 0; $row < 10; $row++) {
    echo '<tr> <td>'.$city[$row]["city"].'</tr> </td>'.
        '<tr> <td>'.$city[$row]["location"].'</tr> </td>'.
        '<tr> <td>'.$city[$row]["People"].'</tr> </td>';
    echo "<br>";
}

echo '<br><hr>';

$sum = array_reduce($city, function($acc, $e) { return $acc + $e[People]; }, 0);
echo $sum;
echo '<br><hr>';




