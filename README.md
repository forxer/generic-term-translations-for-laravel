Generic term translations for Laravel
=====================================

A plugin for [Laravel Lang](https://laravel-lang.com/) that provides generic term translations for Laravel project.

Installation
------------

Require the project using Composer:

```
composer require forxer/generic-term-translations-for-laravel --dev
```

Then use the locales publisher of [Laravel Lang](https://laravel-lang.com/) to add/update/reset or remove translations of this package:
- If you have never used [Laravel Lang](https://laravel-lang.com/) [add locales](https://laravel-lang.com/usage/add-locales.html).
- If you are already using [Laravel Lang](https://laravel-lang.com/), just [update the locales](https://laravel-lang.com/usage/update-locales.html).

Usage
-----

This package provides translations for terms regularly used in projects.

You will find all the terms provided by this package in [the glossary](GLOSSARY.md).

Terms are categorized into different sections by source files. For example there is an `action.php` source file that defines `the add_something` key, you can use it like this:

```
// "en" locale
trans('action.add_something', [
    'something' => 'a post',
]);

// return: "add a post"

// "fr" locale
trans('action.add_something', [
    'something' => 'un article',
]);

// return: "ajouter un article"
```

Be careful to escape the data that you do not control:

```
trans('action.delete_something', [
    'something' => e($post->title),
]);
```
