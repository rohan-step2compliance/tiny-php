# Tiny

[![Latest Version on Packagist](https://img.shields.io/packagist/v/league/tiny.svg?style=flat-square)](https://packagist.org/packages/league/tiny)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/thephpleague/tiny/master.svg?style=flat-square)](https://travis-ci.org/thephpleague/tiny)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/thephpleague/tiny.svg?style=flat-square)](https://scrutinizer-ci.com/g/thephpleague/tiny/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/thephpleague/tiny.svg?style=flat-square)](https://scrutinizer-ci.com/g/thephpleague/tiny)
[![Total Downloads](https://img.shields.io/packagist/dt/league/tiny.svg?style=flat-square)](https://packagist.org/packages/league/tiny)

Tiny is a two-way integer obfuscator that converts integers to a string of characters, and a string of characters to an integer. This gives developers the ability to expose unique identifiers for resources in APIs that does not reveal the number of records in your database if you index your records using auto-incrementing primary keys. See the Usage section below for how easy it is to use!

Tiny's codebase abides by [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and [PSR-4](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader.md) - please keep this in mind if you decide to submit a pull request.

## Install

Via Composer

``` bash
$ composer require league/tiny
```

## Usage

``` php

$tiny = new \League\Tiny\Tiny('5SX0TEjkR1mLOw8Gvq2VyJxIFhgCAYidrclDWaM3so9bfzZpuUenKtP74QNH6B');

echo $tiny->to(5);
// E

echo $tiny->from('E');
// 5

echo $tiny->to(126);
// XX

echo $tiny->from('XX');
// 126

echo $tiny->to(999);
// vk

echo $tiny->from('vk');
// 999

```

## Configuration

You must instanciate a new instance of Tiny with a random alpha-numeric set where each character must only be used exactly once. Do **NOT** change this once you start using Tiny, as you won't be able to reverse.

You can generate a random set from the commandline with `$ ./bin/genset`

## Using Laravel 4?

If you're using laravel and want to use a more Laravel-like and cleaner syntax you only have to follow these steps.

First open your ``config/app.php`` file and scroll down to your providers and add
``` php
'providers' => array(
    // ...
    'League\Tiny\TinyServiceProvider',
)
```
and then this to aliases
``` php
'aliases' => array(
    // ...
    'Tiny' => 'League\Tiny\Facades\Tiny',
)
```

Lastly you run ``php artisan config:publish league/tiny`` to publish the configuration file and then run ``php artisan tiny:generate`` to create a valid key.

### Usage in Laravel
``` php
echo Tiny::to(999);
// echos vk

echo Tiny::from('E');
// echos 5
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email zack@inrpce.com instead of using the issue tracker.

## Credits

Originally by Jacob DeHart, with Ruby and Python ports by Kyle Bragger.

Now maintained by [Zack Kitzmiller](https://github.com/zackkitzmiller).

- [Zack Kitzmiller](https://github.com/zackkitzmiller)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
