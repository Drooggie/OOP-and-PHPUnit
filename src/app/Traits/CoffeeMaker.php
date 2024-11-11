<?php

namespace App\Traits;

class CoffeeMaker
{
    public function makeCoffee()
    {
        echo  substr(strrchr(static::class, '\\'), 1) . ' making coffee <br/>';
    }
}
