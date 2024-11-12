<?php

namespace Tests\Provider;

class RouterDataProvider
{
    public static function routeNotFoundCases(): array
    {
        return [
            ['/Users', 'post'],
            ['/Tweets', 'post'],
            ['/Users', 'delete'],
            ['/profile', 'delete'],
        ];
    }
}
