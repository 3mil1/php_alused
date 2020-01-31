<?php
$hamburger = 4.95;
$milkShake = 1.95;
$cocaCola = 0.85;
$tax = 0.075;
$tip = 0.16;

$mealTip = (2 * $hamburger + $milkShake + $cocaCola) * $tip;
$mealTax = (2 * $hamburger + $milkShake + $cocaCola + $mealTip) * $tax;
$meal = 2 * $hamburger + $milkShake + $cocaCola + $mealTip + $mealTax;
echo $meal;
echo "<br>";

$first_name = Emil;
$last_name = Varn;

echo $first_name . " " . $last_name;
echo "<br>";
echo strlen($first_name . " " . $last_name);
echo "<br>";
echo "<br>";


for ($i = 1; $i <= 5; $i++) {
    echo $i."<br>";
}

echo "<br>";
echo "<br>";




for ($s = 1; $s <= 5; $s++) {
    $i=2;
    echo $i**$s."<br>";
}


