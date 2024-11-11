<?php

use App\Abstract\Text;
use App\Abstract\Radio;

$classes = [
    new Text('text'),
    new Radio('radio'),
];

foreach ($classes as $class) {
    echo $class->render() . '<br/>';
};
echo '<br>';
echo '<br>';
