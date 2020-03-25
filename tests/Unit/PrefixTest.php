<?php

declare(strict_types=1);

namespace Enkidu\Prefix\Test\Unit;

use Illuminate\Support\Facades\Config;
use Orchestra\Testbench\TestCase;

/**
 * Class PrefixTest
 *
 * @package Enkidu\Prefix\Test\Unit
 */
class PrefixTest extends TestCase
{
    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        parent::setUp();
        Config::set('prefix.prefix.backend', 'admin');
        Config::set('prefix.prefix.frontend', 'test');
    }

    /**
     * @test
     */
    public function backend_prefix()
    {
        $this->assertEquals('admin', backend_prefix());
    }

    /**
     * @test
     */
    public function frontend_prefix()
    {
        $this->assertEquals('test', frontend_prefix());
    }
}
