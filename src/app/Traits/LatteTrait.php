<?php

namespace App\Traits;

trait LatteTrait
{
    public function makeLatte()
    {
        echo  substr(strrchr(static::class, '\\'), 1) . ' making latte <br/>';
    }
}
