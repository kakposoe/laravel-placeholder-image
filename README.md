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

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Kakposoe\LaravelPlaceholderImage\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Kakposoe\LaravelPlaceholderImage\Facades\LaravelPlaceholderImage::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Kakposoe\LaravelPlaceholderImage\ServiceProvider" --tag="config"
```

## Usage

CHANGE ME

## Security

If you discover any security related issues, please email 
instead of using the issue tracker.

## Credits

- [](https://github.com/kakposoe/laravel-placeholder-image)
- [All contributors](https://github.com/kakposoe/laravel-placeholder-image/graphs/contributors)

This package is bootstrapped with the help of
[melihovv/laravel-package-generator](https://github.com/melihovv/laravel-package-generator).
