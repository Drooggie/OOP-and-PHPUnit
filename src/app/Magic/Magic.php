<?php

namespace App\Magic;

class Magic
{
    private array $data;

    public function __set(string $name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get(string $name)
    {
        echo $this->data[$name];
    }

    public function __isset(string $name)
    {
        echo 'isset';
        return array_key_exists($name, $this->data);
    }
}
