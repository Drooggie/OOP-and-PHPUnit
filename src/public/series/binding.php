<?php

use App\LateStaticBinding\BindingParent;
use App\LateStaticBinding\BindingChild;

$bindingChild = new BindingChild();
$bindingParent = new BindingParent();

$bindingChild->getAmount();
echo '<br>';
$bindingParent->getAmount();
echo '<br>';


var_dump(BindingChild::make());



echo '<br>';
echo '<br>';
