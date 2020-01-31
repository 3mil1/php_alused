<?php


class Burger
{
    private $nimetus = " ";
    private $liha = " ";
    private $sai = " ";
    private $hind = 0.0;


    private $lisand1 = " ";
    private $lisand1Hind = 0.0;
    private $lisand2 = " ";
    private $lisand2Hind = 0.0;
    private $lisand3 = " ";
    private $lisand3Hind = 0.0;
    private $lisand4 = " ";
    private $lisand4Hind = 0.0;

    /**
     * Burger constructor.
     * @param string $nimetus
     * @param string $liha
     * @param string $sai
     * @param float $hind
     */

    public function __construct(string $nimetus, string $liha, string $sai, float $hind)
    {
        $this->nimetus = $nimetus;
        $this->liha = $liha;
        $this->sai = $sai;
        $this->hind = $hind;
    }

    public function valilisand($lisand1, $lisand1Hind)
    {
        $this ->lisand1 = $lisand1;
        $this ->lisand1Hind = $lisand1Hind;
    }

    public function valilisand2($lisand2, $lisand2Hind)
    {
        $this ->lisand2 = $lisand2;
        $this ->lisand2Hind = $lisand2Hind;
    }

    public function valilisand3($lisand3, $lisand3Hind)
    {
        $this ->lisand3 = $lisand3;
        $this ->lisand3Hind = $lisand3Hind;
    }

    public function valilisand4($lisand4, $lisand4Hind)
    {
        $this ->lisand4 = $lisand4;
        $this ->lisand4Hind = $lisand4Hind;
    }


    public function koostaBurger()
    {
        $burgeriLoppHind = $this ->hind;
        echo 'Burger' . $this->nimetus . 'valmistatud ' . $this->liha . 'lihast ja' . $this->sai . 'saiast, ning maksab ' . $this->hind .  '&euro <br>';

        if($this->lisand1 !== '')
        {
            $burgeriLoppHind += $this->lisand1Hind;
            echo 'Lisaks on valitud' . $this->lisand1 . ', mis maksab' . $this->lisand1Hind . '&euro <br>';
        }

        if($this->lisand2 !== '')
        {
            $burgeriLoppHind += $this->lisand1Hind;
            echo 'Lisaks on valitud' . $this->lisand2 . ', mis maksab' . $this->lisand2Hind . '&euro <br>';
        }

        if($this->lisand3 !== '')
        {
            $burgeriLoppHind += $this->lisand3Hind;
            echo 'Lisaks on valitud' . $this->lisand3 . ', mis maksab' . $this->lisand3Hind . '&euro <br>';
        }

        if($this->lisand4 !== '')
        {
            $burgeriLoppHind += $this->lisand4Hind;
            echo 'Lisaks on valitud' . $this->lisand4 . ', mis maksab' . $this->lisand4Hind . '&euro <br>';
        }
        return $burgeriLoppHind;
    }
}



