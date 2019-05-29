<?php

namespace Kakposoe\LaravelPlaceholderImage;

class PlaceholderImage
{
    public function __call($name, $args)
    {
        if ($name == 'get') {
            return static::get(...$args);
        }

        if (in_array($name, ['keyword', 'icon'])) {
            $mainArgs[] = array_shift($args);
        }

        foreach (['width', 'height'] as $key => $measurement) {
            ${$measurement} = !empty($args[$key]) ? $args[$key] : null;
        }

        $mainArgs[] = static::getSize($width, $height);

        return static::$name(...$mainArgs);
    }

    /**
     * Get a random image.
     *
     * @param   int|null   $width
     * @param   int|null   $height
     *
     * @return string
     */
    protected static function get($width = null, $height = null)
    {
        $urls = [
            'unsplash_source' => [
                'separator' => 'x',
                'url'       => 'https://source.unsplash.com/random/'
            ],
            'picsum' => [
                'separator' => '/',
                'url'       => 'https://picsum.photos/'
            ],
            'loremflicker' => [
                'separator' => '/',
                'url'       => 'https://loremflicker.com/'
            ],
            'lorempixel' => [
                'separator' => '/',
                'url'       => 'http://lorempixel.com/'
            ],
            'unsplash' => [
                'separator' => '/',
                'url'       => 'https://unsplash.it/'
            ],
        ];

        $site = $urls[array_rand($urls)];

        $size = static::getSize($width, $height, ['separator' => $site['separator']]);

        return $site['url'] . $size;
    }

    /**
     * Get a random blurry image.
     *
     * @param   int|null   $width
     * @param   int|null   $height
     *
     * @return string
     */
    protected static function blur($size)
    {
        return 'https://picsum.photos/' . $size . '?blur';
    }

    /**
     * Get a random profile picture.
     *
     * @param   int|null   $width
     * @param   int|null   $height
     *
     * @return string
     */
    protected static function profile($size)
    {
        return 'https://source.unsplash.com/collection/1718802/' . $size;
    }

    /**
     * Get a random landscape image.
     *
     * @param   int|null   $width
     * @param   int|null   $height
     *
     * @return string
     */
    protected static function landscape($size)
    {
        return 'https://source.unsplash.com/collection/151521/' . $size;
    }

    /**
     * Get a image with dimensions within the image.
     *
     * @param   int|null   $width
     * @param   int|null   $height
     *
     * @return string
     */
    protected static function measurement($size)
    {
        return 'https://via.placeholder.com/' . $size;
    }

    /**
     * Get a image based on a keyword.
     *
     * @param   string|array    $keyword
     * @param   int|null        $width
     * @param   int|null        $height
     *
     * @return string
     */
    protected static function keyword($keyword, $size)
    {
        if (is_array($keyword)) {
            $keyword = implode(',', $keyword);
        }

        $size = str_replace('/', 'x', $size);

        return 'https://source.unsplash.com/' . $size . '?' . $keyword;
    }

    /**
     * Get a image with a font awesome icon.
     *
     * @param   int|null   $width
     * @param   int|null   $height
     *
     * @return string
     */
    protected static function icon(string $icon = null, $size)
    {
        $icon = $icon ?: 'image';

        $size = str_replace('/', 'x', $size);

        return "https://imgplaceholder.com/{$size}/cccccc/757575/fa-{$icon}?font-size=150";
    }

    /**
     * Get the size of the image
     *
     * @param   int|null   $width
     * @param   int|null   $height
     * @param   array      $options
     *
     * @return string
     */
    protected static function getSize(int $width = null, int $height = null, $options = [])
    {
        if (isset($options['no_size']) && $options['no_size']) {
            if ( ! $width || (! $width && ! $height)) {
                return null;
            }
        }

        $separator = isset($options['separator']) ? $options['separator'] : '/';

        return implode($separator, [
            'width'  => $width ?: '300',
            'height' => $height ?: ($width ?: '300')
        ]);
    }
}
