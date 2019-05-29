<?php

namespace Kakposoe\LaravelPlaceholderImage\Tests;

use Kakposoe\LaravelPlaceholderImage\Facades\LaravelPlaceholderImage;
use Kakposoe\LaravelPlaceholderImage\ServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelPlaceholderImageTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-placeholder-image' => LaravelPlaceholderImage::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
