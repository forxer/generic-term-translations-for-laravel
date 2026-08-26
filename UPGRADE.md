Upgrade Guide
=============

Upgrading from `1.x` to `2.0`? The short version: raise your PHP and `laravel-lang/publisher` versions (see below), rename any `trans('placeholder.search')` call in your code to `trans('placeholder.search_placeholder')`, and delete the orphaned `search` key from your published `lang/{locale}/placeholder.php` files. That rename is the **only** change in `2.0` that breaks existing application code, but it does not fail loudly when you upgrade: `php artisan lang:update` merges rather than replaces, so the old `search` key survives untouched and keeps resolving silently until a future `lang:reset` or clean reinstall removes it. Everything else described below is either an environment prerequisite or a translation content fix that applies automatically once you republish.

Prerequisites
-------------

| | 1.x | 2.x |
|---|---|---|
| PHP | `^8.1` | `^8.4` |
| `laravel-lang/publisher` | `^14.1 \|\| ^15.0 \|\| ^16.0` | `^16.0` |

If your project cannot meet these requirements yet, stay on `1.12.0` — it remains fully functional.

Breaking change: `placeholder.search` was renamed
-------------------------------------------------

This is the only change in `2.0` that breaks existing application code — but it does not fail loudly when you upgrade. `php artisan lang:update` merges translations rather than replacing them (see [Migration steps](#migration-steps) below), so the orphaned `placeholder.search` key from `1.x` survives the update untouched and keeps resolving silently. The break only surfaces later, on the next `lang:reset` or a clean reinstall, once the orphaned key is gone — which is why the manual cleanup step below matters.

```php
// Before (1.x)
trans('placeholder.search');

// After (2.x)
trans('placeholder.search_placeholder');
```

Why: `placeholder.search` collided with `action.search`. Translations are compiled into a single flat file per locale, so `action.search` was silently receiving the placeholder wording ("Search...") instead of its own value ("Search"). After migrating, `action.search` finally returns the correct value — this is a fix, not just a constraint to work around.

Find every occurrence to update:

```bash
grep -rn "placeholder.search" --include="*.php" --exclude-dir=vendor .
```

Migration steps
---------------

```bash
composer require forxer/generic-term-translations-for-laravel:^2.0 --dev
php artisan lang:update
```

`lang:update` republishes every key managed by the packages you have installed, including this one: it overwrites the current value of those keys in your `lang/{locale}/` files with the package's defaults. It does not touch keys that belong to your own application. If you hand-edited the wording of any key managed by this package, save your wording before running the command and reapply it afterwards.

`lang:update` merges, it does not remove: the orphaned `search` key from `1.x` is not part of this package's `2.0` translations, so the command leaves it sitting untouched in your `lang/{locale}/placeholder.php` files alongside the new `search_placeholder` key. Delete that orphaned `search` entry by hand once the update is done — otherwise it keeps `trans('placeholder.search')` working silently until a future `lang:reset` or clean reinstall removes it and breaks that call in production.

Translation value corrections
-----------------------------

These ship automatically with the updated translations — no code change needed, but worth reviewing if your project uses the `en` locale:

- 48 `action` values in the `en` locale no longer matched their source values. They are now corrected (`add` → `Add`, `edit` → `Edit`, ...). English-speaking projects will see the casing of these action labels change.
- The `unit.KiB`, `unit.MiB`, `unit.GiB` and `unit.TiB` keys, missing from the `en` locale since `1.12.0`, are now present.

Full changelog
--------------

See [CHANGELOG.md](CHANGELOG.md) for the exhaustive list of changes in `2.0.0`.
