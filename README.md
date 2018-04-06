# Emoji

[![Latest Stable Version](https://poser.pugx.org/sachinkiranti/emoji/v/stable)](https://packagist.org/packages/sachinkiranti/emoji)

[![Total Downloads](https://poser.pugx.org/sachinkiranti/emoji/downloads)](https://packagist.org/packages/sachinkiranti/emoji)

[![License](https://poser.pugx.org/sachinkiranti/emoji/license)](https://packagist.org/packages/sachinkiranti/emoji)

> A simple yet flexible emoji integration system for laravel.
## Installation

Installation is straightforward, setup is similar to every other Laravel Package.

#### 1. Install via Composer

Begin by pulling in the package through Composer:

```
composer require sachinkiranti/emoji
```

#### 2. Define the Service Provider and alias

**Note:** This package supports the new auto discovery features of Laravel 5.5, so if you are working on a Laravel 5.5 project, then your install is complete, you can skip to step 3.

#### 3. Publish Config File

To generate a config file type this command into your terminal:

```
php artisan vendor:publish --tag=emoji
```

## Usage
Using Emoji is as easy as it sound.

**Note:** You can add as many emoji in your config emoji.php and start using it or may be contribute to emoji, you can make a section and push like i did with Country flags


```
To get all the emoji :

Emoji::all() // return array

To get the emoji with the key :

Emoji::get('smiley')

or to get multiple emoji :

Emoji::get(['smiley','nepalflag'])) 
😃🇳🇵

To check if we have the emoji with the key :

Emoji::has('smiley')

or to check multiple emoji is available :

Emoji::has(['smiley', 'nepalflag'])

You can use helper functions too 

emoji('smiley') 
😃

emoji(['smiley','nepalflag'])) 

emoji()->has('nepalflag')

if(emoji()->has(['birthday','runnings'])) {
    echo "yes";
} else {
    echo "no";
}

```

## Inspiration

* [Emoji](https://github.com/spatie/emoji)
* [Emoji](https://github.com/unicodeveloper/laravel-emoji)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.