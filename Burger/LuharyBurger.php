<?php

require_once 'Burger.php';

class LuharyBurger extends Burger
{
    public function __construct()
    {
        parent::__construct('LuharyBurger', 'loomaliha', 'kuldsai', 10);
        parent::valilisand1('kartul', 2.2);
        parent::valilisand2('vesi', 1.0);
    }

    public function valilisand1($lisand1, $lisand1Hind)
    {
        echo 'Pole võimalik';
    }

    public function valilisand2($lisand2, $lisand2Hind)
    {
        echo 'Pole võimalik';
    }

    public function valilisand3($lisand3, $lisand3Hind)
    {
        echo 'Pole võimalik';
    }

    public function valilisand4($lisand4, $lisand4Hind)
    {
        echo 'Pole võimalik';
    }
}

