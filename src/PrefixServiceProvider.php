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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/prefix.php' => config_path('prefix.php'),
        ]);
    }
}
