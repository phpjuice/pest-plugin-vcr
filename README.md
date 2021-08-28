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

To make this plugin functionality available, we need to let Pest know that it should use it. 

We will do this by adding the following to your `Pest.php`:

```php
use PHPJuice\PestPluginVcr\PestPluginVcr;
 
Pest\Plugin::uses(PestPluginVcr::class);
```

## Example

The following testsuite, will first send a request to `pestphp.com` and 
Record your test suite's HTTP interactions into a cassette and replay them 
during future test runs for fast, deterministic, accurate tests...

```php
it('records requests to pestphp.com', function () {

    vcrTurnOn('pestphp.com');

    $result = file_get_contents('https://pestphp.com/');

    expect($result)
        ->toBe('Hello from pestphp.');

    vcrTurnOff();
});
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

If you discover any security related issues, reach out to me @tsd_mohammed instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).
