# Pest plugin for PHP-VCR

[![Latest Version on Packagist](https://img.shields.io/packagist/v/phpjuice/pest-plugin-vcr.svg?style=flat-square)](https://packagist.org/packages/phpjuice/pest-plugin-vcr)
[![Total Downloads](https://img.shields.io/packagist/dt/phpjuice/pest-plugin-vcr.svg?style=flat-square)](https://packagist.org/packages/phpjuice/pest-plugin-vcr)
![GitHub Actions](https://github.com/phpjuice/pest-plugin-vcr/actions/workflows/ci.yml/badge.svg)

Integrates Pest with PHP-VCR using plugins.

## Installation

You can install the package via composer:

```bash
composer require phpjuice/pest-plugin-vcr --dev
```

## Usage

```php
use PHPJuice\PestPluginVcr\PestPluginVcr;
 
Pest\Plugin::uses(PestPluginVcr::class);
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mohammed@amalyet.com instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).
