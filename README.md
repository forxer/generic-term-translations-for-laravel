Generic term translations for Laravel
=====================================

A plugin for [Laravel Lang](https://laravel-lang.com/) that provides generic term translations for Laravel project.

Consult [the glossary](GLOSSARY.md) to see all the terms available for translation.

Installation
------------

Require the project using Composer:

```
composer require forxer/generic-term-translations-for-laravel --dev
```

> **Upgrading from 1.x?** Read the [upgrade guide](UPGRADE.md) first.

Then use the locales publisher of [Laravel Lang](https://laravel-lang.com/) to add/update/reset or remove translations of this package:
- If you have never used [Laravel Lang](https://laravel-lang.com/): [add locales](https://laravel-lang.com/usage/add-locales.html).
- If you are already using [Laravel Lang](https://laravel-lang.com/): just [update the locales](https://laravel-lang.com/usage/update-locales.html).

Requirements
------------

- PHP `^8.4`
- `laravel-lang/publisher` `^16.0`

Usage
-----

This package provides translations for terms regularly used in projects.

You will find all the terms provided by this package in [the glossary](GLOSSARY.md).

Terms are categorized into different sections by source files. For example there is an `action.php` source file that defines `the add_something` key, you can use it like this:

```php
// "en" locale
trans('action.add_something', [
    'something' => 'a post',
]);

// return: "Add a post"

// "fr" locale
trans('action.add_something', [
    'something' => 'un article',
]);

// return: "Ajouter un article"
```

Be careful to escape the data that you do not control:

```php
trans('action.delete_something', [
    'something' => e($post->title),
]);
```

### Feminine and masculine gender

Some languages distinguish between feminine and masculine genders, for the same term the feminine key will then be suffixed by `_fem`. For example:

In English we use "all", while in French we use "toutes" in the feminine and "tous" in the masculine (see it on [Google Translate](https://translate.google.fr/?sl=en&tl=fr&text=all&op=translate)).

```php
// "en" locale
trans('misc.all'); // return: "all"

trans('misc.all_fem'); // return: "all"

// "fr" locale
trans('misc.all'); // return: "tous"

trans('misc.all_fem'); // return: "toutes"
```

Development steps
-----------------

1. From the package directory, run `composer update`
2. Update the sources as needed in `source/` files
3. Run the console command `php vendor/bin/lang sync`
4. Translate modifications in `locales/{locale}/php.json`
5. Run `composer glossary` to regenerate [GLOSSARY.md](GLOSSARY.md)
6. Run `composer test` to check key consistency across locales and that the glossary is up to date
7. Run `composer lint` to format the code
8. Commit changes

`GLOSSARY.md` is a generated file: it is built from `source/` and `locales/`, and must
never be edited by hand. `composer test` fails when it no longer matches them.
