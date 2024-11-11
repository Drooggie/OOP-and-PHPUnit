<?php

namespace App\Enums;

class Status
{
    public const NEW     = 'new';
    public const ERROR   = 'error';
    public const SUCCESS = 'success';

    public const ALL_STATUS = [
        self::NEW => 'New',
        self::ERROR => 'Error',
        self::SUCCESS => 'Success',
    ];
}
