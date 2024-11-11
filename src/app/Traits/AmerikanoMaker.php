<?php

namespace App\Traits;

use App\Traits\CoffeeMaker;
use App\Traits\AmerikanoTrait;

class AmerikanoMaker extends CoffeeMaker
{
    use AmerikanoTrait {
        AmerikanoTrait::makeAmerikano as public;
    }
}
