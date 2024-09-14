# Filament Indonesia Territory Select Form 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/teguh02/indonesia-territory-forms.svg?style=flat-square)](https://packagist.org/packages/teguh02/indonesia-territory-forms)
[![Total Downloads](https://img.shields.io/packagist/dt/teguh02/indonesia-territory-forms.svg?style=flat-square)](https://packagist.org/packages/teguh02/indonesia-territory-forms)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require teguh02/indonesia-territory-forms
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag=indonesia-territory-forms-config
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="indonesia-territory-forms-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="indonesia-territory-forms-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$indonesiaTerritoryForms = new Teguh02\IndonesiaTerritoryForms();
echo $indonesiaTerritoryForms->echoPhrase('Hello, Teguh02!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Teguh Rijanandi](https://github.com/teguh02)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
