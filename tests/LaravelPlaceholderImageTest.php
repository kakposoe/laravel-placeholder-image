<?php

namespace Kakposoe\LaravelPlaceholderImage\Tests;

use Orchestra\Testbench\TestCase;
use Kakposoe\LaravelPlaceholderImage\ServiceProvider;
use Kakposoe\LaravelPlaceholderImage\Facades\LaravelPlaceholderImage;

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

    /** @test */
    public function can_get_placeholder_image_url()
    {
        $imageUrl = LaravelPlaceholderImage::get();

        $this->assertContains('600', $imageUrl);
        $this->assertContains('400', $imageUrl);
    }

    /** @test */
    public function can_set_dimensions_on_placeholder_image()
    {
        $imageUrl = LaravelPlaceholderImage::get(300, 300);

        $this->assertContains('300', $imageUrl);
    }

    /** @test */
    public function can_get_blurry_placeholder_image()
    {
        $imageUrl = LaravelPlaceholderImage::blur(300, 300);

        $this->assertContains('?blur', $imageUrl);
    }

    /** @test */
    public function can_set_keyword_on_placeholder_image()
    {
        $imageUrl = LaravelPlaceholderImage::keyword('food');

        $this->assertContains('food', $imageUrl);
    }

    /** @test */
    public function can_get_placeholder_image_url_with_dimensions_on_image()
    {
        $imageUrl = LaravelPlaceholderImage::dimensions(250, 100);

        $this->assertContains('250/100', $imageUrl);
    }

    /** @test */
    public function can_get_profile_image_placeholder()
    {
        $imageUrl = LaravelPlaceholderImage::profile();

        $this->assertContains('600x400', $imageUrl);
    }
}
