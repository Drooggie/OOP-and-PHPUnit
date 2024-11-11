<?php

use App\Traits\AllInOneCoffeeMaker;

$obj = new class(125, 'des') extends AllInOneCoffeeMaker {
    public function __construct(
        private int $amount,
        private string $description,
    ) {}

    public function getAmount()
    {
        return $this->amount . '<br>';
    }
};

var_dump($obj->getAmount());
$obj->makeCoffee();



echo '<br>';
echo '<br>';
