# Laravel / Hotwire UI Kit.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jobinjahq/injakit.svg?style=flat-square)](https://packagist.org/packages/jobinjahq/injakit)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jobinjahq/injakit/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jobinjahq/injakit/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jobinjahq/injakit/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jobinjahq/injakit/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jobinjahq/injakit.svg?style=flat-square)](https://packagist.org/packages/jobinjahq/injakit)

## Installation

You can install the package via composer:

```bash
composer require jobinjahq/injakit
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="injakit-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="injakit-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using:

```bash
php artisan vendor:publish --tag="injakit-views"
```

## Usage

To be written

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Reza Shadman](https://github.com/reshadman)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
