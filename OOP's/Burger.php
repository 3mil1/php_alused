<?php
class Burger {
    private $nimetus = " ";
    private $liha= " ";
    private $sai= " ";
    private $hind= 0.0;

    private $lisand1= " ";
    private $lisand1Hind= 0.0;
    private $lisand2= " ";
    private $lisand2Hind= 0.0;
    private $lisand3= " ";
    private $lisand3Hind= 0.0;
    private $lisand4= " ";
    private $lisand4Hind= 0.0;

    public function __construct($nimetus, $liha, $sai, $hind)
    {
        $this ->nimetus = $nimetus;
        $this->liha = $liha;
        $this->sai = $sai;
        $this->hind = $hind;
    }

    public function valilisand1($lisand1, $lisand1Hind)
    {
        $this -> lisand1 = $lisand1;
        $this -> lisand1Hind = $lisand1Hind;
    }

    public function valilisand2($lisand2, $lisand2Hind)
    {
        $this -> lisand2 = $lisand2;
        $this -> lisand2Hind = $lisand2Hind;
    }

    public function valilisand3($lisand3, $lisand3Hind)
    {
        $this -> lisand3 = $lisand3;
        $this -> lisand3Hind = $lisand3Hind;
    }

    public function valilisand4($lisand4, $lisand4Hind)
    {
        $this -> lisand4 = $lisand4;
        $this -> lisand4Hind = $lisand4Hind;
    }

    public function koostaBurger()
    {
        $burgeriHind = $this->hind;
        echo 'Burger ' . $this->nimetus . ' sisaldab ' . $this->sai . ' ja ' . $this->liha . ' liha ja maksab ' .$this->hind . '&euro;<br>';
    }
}

