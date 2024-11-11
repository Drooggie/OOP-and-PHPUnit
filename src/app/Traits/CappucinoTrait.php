<?php

namespace App\Traits;

trait CappucinoTrait
{
    public function makeCappucino()
    {
        echo  substr(strrchr(static::class, '\\'), 1) . ' making cappucino <br/>';
    }
    public function makeLatte()
    {
        echo  substr(strrchr(static::class, '\\'), 1) . ' making latte <br/>';
    }
}
