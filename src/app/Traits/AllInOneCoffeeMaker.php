<?php

namespace App\Traits;

use App\Traits\CoffeeMaker;
use App\Traits\LatteTrait;
use App\Traits\CappucinoTrait;
use App\Traits\AmerikanoTrait;

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use CappucinoTrait {
        CappucinoTrait::makeCappucino as Cappucino;
    }
    use LatteTrait {
        LatteTrait::makeLatte insteadof CappucinoTrait;
    }
    use AmerikanoTrait {
        AmerikanoTrait::makeAmerikano as public;
    }
}
