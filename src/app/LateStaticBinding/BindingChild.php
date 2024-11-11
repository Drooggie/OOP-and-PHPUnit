<?php

namespace App\LateStaticBinding;

use App\LateStaticBinding\BindingParent;

class BindingChild extends BindingParent
{
    public static int $amount = 10;
}
