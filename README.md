# Laravel Placeholder Image

[![Build Status](https://travis-ci.org/kakposoe/laravel-placeholder-image.svg?branch=master)](https://travis-ci.org/kakposoe/laravel-placeholder-image)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require kakposoe/laravel-placeholder-image
```

### Register Service Provider

If you use laravel < 5.5, Add service provider to `config/app.php` in `providers` section
```php
Kakposoe\LaravelViewGenerator\LaravelViewGeneratorServiceProvider::class,
```

### Register Facade

If you use laravel < 5.5, register package facade in `config/app.php` in `aliases` section
```php
Kakposoe\LaravelPlaceholderImage\Facades\LaravelPlaceholderImage::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Kakposoe\LaravelPlaceholderImage\ServiceProvider" --tag="config"
```

## How to use
You can get a placeholder image url within your blade templates by adding:

```php
{{ Placeholder::get($width = null, $height = null) }}
```
By default, images will be returned as a 600px x 400px image.

To change the dimensions of the image, simply add the `$width` and `$height` like so:

```php
{{ Placeholder::get(300, 300) }}
```

## Different image types
There are several different types of image at your disposal:

### Icon image
You are able to create a placeholder image with a font-awesome icon in the middle:

```php
<img src="{{ PlaceholderImage::icon('arrow-up') }}">
```

**Note:** By default, the `fa-image` icon will be returned.

### Blurry image
To return a blurry image:

```php
<img src="{{ PlaceholderImage::blur($width = null, $height = null) }}">
```

### Keyword search
You can return a placeholder url based on a keyword:

```php
<img src="{{ PlaceholderImage::keyword('food') }}">
```

### Placeholder with image dimensions
An placeholder image url which has the image dimensions can be returned using the `::dimensions()` method:

```php
<img src="{{ PlaceholderImage::dimensions($width = null, $height = null) }}">
```
