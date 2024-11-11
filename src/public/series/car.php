<?php

use App\Examples\Car;
use App\Examples\FasterCar;


$car = new Car();

$car->ride();
var_dump($car->getKillometr());
echo '<br>';

$fasterCar = new FasterCar;

$fasterCar->ride();
var_dump($fasterCar->getKillometr());


echo '<br>';
echo '<br>';
