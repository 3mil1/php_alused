<?php

require_once 'Burger.php';
class FancyBurger extends Burger
{
    private $fancyLisand1 = " ";
    private $fancyLisand1Hind = 0.0;
    private $fancyLisand2 = " ";
    private $fancyLisand2Hind = 0.0;

    /**
     * FancyBurger constructor.
     */
    public function __construct($liha, $hind)
    {
        parent::__construct('Fancy', $liha, 'tera leib', $hind);
    }

    public function valifancyLisand1($fancyLisand1, $fancyLisand1Hind)
    {
        $this->fancyLisand1 = $fancyLisand1;
        $this->fancyLisand1Hind = $fancyLisand1Hind;
    }

    public function valifancyLisand2($fancyLisand2, $fancyLisand2Hind)
    {
        $this->fancyLisand2 = $fancyLisand2;
        $this->fancyLisand2Hind = $fancyLisand2Hind;
    }

    public function koostaBurger()
    {
        $burgeriLoppHind = parent::koostaBurger();

        if ($this->fancyLisand1 !== ''){
            $burgeriLoppHind += $this->fancyLisand1Hind;
            echo 'Lisaks'.$this->fancyLisand1. ', hind '.$this->fancyLisand1Hind.'&euro;<br>';
        }
        if ($this->fancyLisand2 !== ''){
            $burgeriLoppHind += $this->fancyLisand2Hind;
            echo 'Lisaks'.$this->fancyLisand2. ', hind '.$this->fancyLisand2Hind.'&euro;<br>';
        }

        return $burgeriLoppHind;
    }
}

