<?php

require_once 'Burger.php';
require_once 'FancyBurger.php';
require_once 'LuharyBurger.php';

$bomgeBurger = new Burger('BomgeBurger', 'looma', 'valge sai', 1.50 );
$bomgeBurger->valilisand1('kurk', '0.1');
$bomgeBurger->valilisand2('salat', '0.14');
$bomgeBurger->valilisand3('juust', '0.12');

$loppHind = $bomgeBurger -> koostaBurger();
echo 'Oled meile võlgu: ' . $loppHind . '&euro;<br>';
echo "<hr>";

$fancyBurger = new FancyBurger('Soja','11');
$fancyBurger->valilisand1('Salat', '0.1');
$fancyBurger->valilisand1('Kallis Salat', '0.1');
$loppHind = $fancyBurger->koostaBurger();
echo 'Oled meile võlgu: ' . $loppHind . '&euro;<br>';
echo "<hr>";

$LuharyBurger = new LuharyBurger();
$LuharyBurger->valilisand1('LUXAYSalat', '0.1');
$loppHind = $LuharyBurger->koostaBurger();
echo 'Oled meile võlgu: '.$loppHind.'&euro;<br>';