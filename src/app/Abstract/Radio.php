<?php

namespace App\Abstract;

use App\Abstract\Field;

class Radio extends Field
{
    public function render()
    {
        return <<<HTML
            <input type='radio' name="{$this->name}"/>
        HTML;
    }
}
