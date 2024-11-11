<?php

use App\Traits\AllInOneCoffeeMaker;
use App\Traits\AmerikanoMaker;
use App\Traits\CoffeeMaker;
use App\Traits\LatteMaker;
use App\Traits\CappucinoMaker;


$coffeeMaker = new CoffeeMaker();
$latteMaker = new LatteMaker();
$cappucinoMaker = new CappucinoMaker();
$amerikanoMaker = new AmerikanoMaker();
$allInOneCoffeeMaker = new AllInOneCoffeeMaker();

$coffeeMaker->makeCoffee();

$latteMaker->makeCoffee();
$latteMaker->makeLatte();

$cappucinoMaker->makeCoffee();
$cappucinoMaker->makeCappucino();

$amerikanoMaker->makeCoffee();
$amerikanoMaker->makeAmerikano();

$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeCappucino();
$allInOneCoffeeMaker->makeAmerikano();


echo '<br>';
echo '<br>';
