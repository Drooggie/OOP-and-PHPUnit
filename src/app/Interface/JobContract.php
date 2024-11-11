<?php

namespace App\Interface;

use App\Interface\Contract;

class JobContract implements Contract
{


    public function __construct(private string $contract) {}
    public function anotherMethod() {}

    public function showContract(): string
    {
        return $this->contract;
    }

    public function changeContract(string $contract): Contract
    {
        $this->contract = $contract;

        return $this;
    }
}
