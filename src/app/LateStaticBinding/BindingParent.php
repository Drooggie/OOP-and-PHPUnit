<?php

namespace App\LateStaticBinding;

class BindingParent
{
    public static int $amount = 5;

    public static function getAmount()
    {
        var_dump(static::$amount);
    }

    public static function make()
    {
        return new static;
    }
}
