<?php

namespace auth;

use RuntimeException;

class BasicAuth
{
    private const USERNAME = 'admin';
    private const PASSWORD = 'password123';

    public static function authenticate(): void
    {
        if (!isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])) {
            self::unauthorized();
        }

        if (
            $_SERVER['PHP_AUTH_USER'] !== self::USERNAME ||
            $_SERVER['PHP_AUTH_PW'] !== self::PASSWORD
        ) {
            self::unauthorized();
        }
    }

    private static function unauthorized(): void
    {
        throw new RuntimeException('Unauthorized', 401);
    }
}
