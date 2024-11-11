<?php

namespace App\Interface;

use App\Interface\AnotherContract;

interface Contract extends AnotherContract
{
    public function __construct(string $contract);
    public function showContract(): string;
    public function changeContract(string $contract): self;
}
