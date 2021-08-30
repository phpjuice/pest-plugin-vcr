# Pest plugin for PHP-VCR

![Tests](https://github.com/phpjuice/pest-plugin-vcr/actions/workflows/ci.yml/badge.svg)
[![Latest Stable Version](http://poser.pugx.org/phpjuice/pest-plugin-vcr/v)](https://packagist.org/packages/phpjuice/pest-plugin-vcr)
[![Total Downloads](http://poser.pugx.org/phpjuice/pest-plugin-vcr/downloads)](https://packagist.org/packages/phpjuice/pest-plugin-vcr)
[![License](http://poser.pugx.org/phpjuice/pest-plugin-vcr/license)](https://packagist.org/packages/phpjuice/pest-plugin-vcr)

Integrates Pest with [PHP-VCR](http://php-vcr.github.io) using plugins.

## Installation

You can install the package via composer:

```bash
composer require phpjuice/pest-plugin-vcr --dev
```

## Setup

Add new folder inside tests to store cassettes:

```bash
mkdir tests/cassettes
```

Add the following line to your `Pest.php` file, this will tell
VCR where to look for `cassettes`:

```php
use VCR\VCR;


VCR::configure()->setCassettePath(__DIR__.'/cassettes');
```

## Usage

This plugin will provide you with two handy functions `vcrTurnOn` & `vcrTurnOff` to turn on and off the http recording :

```php
it('records requests to pestphp.com', function () {

    vcrTurnOn('pestphp.com');

    $result = file_get_contents('https://pestphp.com/');

    expect($result)
        ->toBe('Hello from pestphp.');

    vcrTurnOff();
});
```

The previous testsuite, will first send a request to `pestphp.com` and
Record your test suite's HTTP interactions into a cassette and replay them
during future test runs for fast, deterministic, accurate tests.

> **Important** before running your tests make sure to have the following folder `tests/cassettes`

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](../CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](../CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, send us an email to phpjuice@gmail.com instead of using the issue tracker.

## Credits

- [All Contributors](../../../contributors)

## License

The MIT License (MIT). Please see [License File](../LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).

![Tests](https://github.com/phpjuice/pest-plugin-vcr/actions/workflows/ci.yml/badge.svg)
[![Latest Stable Version](http://poser.pugx.org/phpjuice/pest-plugin-vcr/v)](https://packagist.org/packages/phpjuice/pest-plugin-vcr)
[![Total Downloads](http://poser.pugx.org/phpjuice/pest-plugin-vcr/downloads)](https://packagist.org/packages/phpjuice/pest-plugin-vcr)
[![License](http://poser.pugx.org/phpjuice/pest-plugin-vcr/license)](https://packagist.org/packages/phpjuice/pest-plugin-vcr)
