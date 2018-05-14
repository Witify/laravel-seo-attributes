# Quick JSON reponses in Laravel 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/Witify/laravel-seo-attributes.svg?style=flat-square)](https://packagist.org/packages/witify/laravel-seo-attributes)
[![Build Status](https://img.shields.io/travis/Witify/laravel-seo-attributes/master.svg?style=flat-square)](https://travis-ci.org/witify/laravel-seo-attributes)
[![Quality Score](https://img.shields.io/scrutinizer/g/Witify/laravel-seo-attributes.svg?style=flat-square)](https://scrutinizer-ci.com/g/witify/laravel-seo-attributes)
[![Total Downloads](https://img.shields.io/packagist/dt/Witify/laravel-seo-attributes.svg?style=flat-square)](https://packagist.org/packages/witify/laravel-seo-attributes)

## Installation

You can install the package via composer:

```bash
composer require witify/laravel-seo-attributes
```

## Usage

Add it to your controller:
``` php

use Witify\LaravelSeoAttributes\SeoTrait;

class HomeController extends Controller {
    use SeoTrait;
}
```

## Available methods

| Method | Description |
| --- | --- |
| seo()->setTitle(string $title) | Adds seo.title value in the view |
| seo()->setDescription(string $description) | Adds seo.description value in the view |
| seo()->setRelCanonical(string $relCanonical) | Adds seo.rel_canonical value in the view |

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email info@witify.io instead of using the issue tracker.

## Credits

- [François Lévesque](https://github.com/francoislevesque)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
