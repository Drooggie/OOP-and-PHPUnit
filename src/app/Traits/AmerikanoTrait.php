<?php

namespace App\Traits;

trait AmerikanoTrait
{
    private function makeAmerikano()
    {
        echo substr(strrchr(static::class, '\\'), 1) . ' making Amerikano <br>';
    }
}
