<?php

namespace App\Examples;

class Car
{
    public int $killometr = 0;
    public int $speed     = 20;

    public function ride()
    {
        $this->killometr += $this->speed;
    }

    public function getKillometr()
    {
        return $this->killometr;
    }
}
