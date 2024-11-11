<?php

namespace App;

use App\Enums\Status;

class Container
{
    private string $status;
    private static int $amount = 0;

    public function __construct()
    {
        $this->setStatus(Status::NEW);
    }

    public function setStatus($arg_status)
    {
        if (! isset(Status::ALL_STATUS[$arg_status])) {
            throw new \InvalidArgumentException('Wrong value in argument');
        }
        $this->status = $arg_status;

        return $this;
    }

    public function addAmount(int $sum): self
    {
        self::$amount += $sum;

        return $this;
    }

    public function viewStatus()
    {
        return $this->status;
    }

    public function viewAmount()
    {
        return self::$amount;
    }
}
