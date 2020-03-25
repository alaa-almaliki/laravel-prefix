<?php

declare(strict_types=1);

namespace Enkidu\Prefix;

use Illuminate\Support\ServiceProvider;

/**
 * Class PrefixServiceProvider
 *
 * @package Enkidu\Prefix
 */
class PrefixServiceProvider extends ServiceProvider
{
    /**
     * Boot Module
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/prefix.php' => config_path('prefix.php'),
        ]);
    }
}
