<?php

declare(strict_types=1);

if (!defined('PREFIX')) {
    define('PREFIX', 1);

    /**
     * @return string
     */
    function backend_prefix(): string {
        return (string) config('prefix.prefix.backend');
    }

    /**
     * @return string
     */
    function frontend_prefix(): string {
        return (string) config('prefix.prefix.frontend');
    }
}
