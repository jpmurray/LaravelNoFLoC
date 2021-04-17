# Laravel No FLoC

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

This package will add the `Permissions-Policy: interest-cohort=()` to try and twart Google's usage of your site in it's FLoC tracking method.

**That being said, it might not be a foolproof method.** See [Seirdly.one's post](https://seirdy.one/2021/04/16/permissions-policy-floc-misinfo.html) to get to know why it might work well, why it might not.

## Installation & usage

Via Composer

``` bash
$ composer require jpmurray/laravel-nofloc
```

That's all. The header will be added to all request via a global middleware.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Jean-Philippe Murray][https://github.com/jpmurray]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jpmurray/laravel-nofloc.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jpmurray/laravel-nofloc.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jpmurray/laravel-nofloc/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/jpmurray/laravel-nofloc
[link-downloads]: https://packagist.org/packages/jpmurray/laravel-nofloc
[link-travis]: https://travis-ci.org/jpmurray/laravel-nofloc
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/jpmurray
[link-contributors]: ../../contributors
