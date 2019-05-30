<?php

namespace Kakposoe\LaravelPlaceholderImage\Facades;

use Illuminate\Support\Facades\Facade;
use Kakposoe\LaravelPlaceholderImage\PlaceholderImage;

class LaravelPlaceholderImage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return PlaceholderImage::class;
    }
}
