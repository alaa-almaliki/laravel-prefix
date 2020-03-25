<?php

declare(strict_types=1);

if (! defined('ENKIDU_PREFIX')) {
    define('ENKIDU_PREFIX', 1);

    function backend_prefix(): string
    {
        return (string) config('prefix.prefix.backend');
    }

    function frontend_prefix(): string
    {
        return (string) config('prefix.prefix.frontend');
    }
}
