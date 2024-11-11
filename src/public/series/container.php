<?php

use App\Container;
use App\Enums\Status;


$container = new Container();

$container->setStatus(Status::SUCCESS);

var_dump($container->viewStatus());

echo '<br>';
$container->addAmount(8);
echo '<br>';
$container->addAmount(10);
echo ($container->viewAmount());


echo '<br>';
echo '<br>';
