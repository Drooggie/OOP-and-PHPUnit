<?php

use App\Comparison\ComparisonClass1;
use App\Comparison\ComparisonClass2;

$foo = new ComparisonClass1(25, 'foo');
$boo = new ComparisonClass1(25, 'foo');


var_dump($foo == $boo);
echo '<br>';
var_dump($foo === $boo);

echo '<br>';
echo '<br>';
