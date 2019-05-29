<?php

namespace Kakposoe\LaravelPlaceholderImage;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const CONFIG_PATH = __DIR__ . '/../config/laravel-placeholder-image.php';

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('laravel-placeholder-image.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'laravel-placeholder-image'
        );

        $this->app->bind('placeholder-image', PlaceholderImage::class);
    }
}
