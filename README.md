# Laravel Placeholder Image

[![Build Status](https://travis-ci.org/kakposoe/laravel-placeholder-image.svg?branch=master)](https://travis-ci.org/kakposoe/laravel-placeholder-image)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/kakposoe/laravel-placeholder-image/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/kakposoe/laravel-placeholder-image/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/kakposoe/laravel-placeholder-image/badge.svg?branch=master)](https://coveralls.io/github/kakposoe/laravel-placeholder-image?branch=master)

[![Packagist](https://img.shields.io/packagist/v/kakposoe/laravel-placeholder-image.svg)](https://packagist.org/packages/kakposoe/laravel-placeholder-image)
[![Packagist](https://poser.pugx.org/kakposoe/laravel-placeholder-image/d/total.svg)](https://packagist.org/packages/kakposoe/laravel-placeholder-image)
[![Packagist](https://img.shields.io/packagist/l/kakposoe/laravel-placeholder-image.svg)](https://packagist.org/packages/kakposoe/laravel-placeholder-image)

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
