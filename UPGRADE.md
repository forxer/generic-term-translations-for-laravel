Upgrade Guide
=============

Upgrading from `1.x` to `2.0`? The short version: raise your PHP and `laravel-lang/publisher` versions (see below), and rename any `trans('placeholder.search')` call in your code to `trans('placeholder.search_placeholder')` — that is the **only** change in `2.0` that breaks existing application code. Everything else described below is either an environment prerequisite or a translation content fix that applies automatically once you republish.

Prerequisites
-------------

| | 1.x | 2.x |
|---|---|---|
| PHP | `^8.1` | `^8.4` |
| `laravel-lang/publisher` | `^14.1 \|\| ^15.0 \|\| ^16.0` | `^16.0` |

If your project cannot meet these requirements yet, stay on `1.12.0` — it remains fully functional.

Breaking change: `placeholder.search` was renamed
---------------------------------------------------

This is the only change in `2.0` that breaks existing application code.

```php
// Before (1.x)
trans('placeholder.search');

// After (2.x)
trans('placeholder.search_placeholder');
```

Why: `placeholder.search` collided with `action.search`. Translations are compiled into a single flat file per locale, so `action.search` was silently receiving the placeholder wording ("Search...") instead of its own value ("Search"). After migrating, `action.search` finally returns the correct value — this is a fix, not just a constraint to work around.

Find every occurrence to update:

```bash
grep -rn "placeholder.search" --include="*.php" --include="*.blade.php" .
```

Migration steps
----------------

```bash
composer require forxer/generic-term-translations-for-laravel:^2.0 --dev
php artisan lang:update
```

`lang:update` republishes every key managed by the packages you have installed, including this one: it overwrites the current value of those keys in your `lang/{locale}/` files with the package's defaults. It does not touch keys that belong to your own application. If you hand-edited the wording of any key managed by this package, save your wording before running the command and reapply it afterwards.

Translation value corrections
-------------------------------

These ship automatically with the updated translations — no code change needed, but worth reviewing if your project uses the `en` locale:

- 48 `action` values in the `en` locale had stayed lowercase even though `1.11.0` announced their capitalization. They are now capitalized (`add` → `Add`, `edit` → `Edit`, ...). English-speaking projects will see the casing of these action labels change.
- The `unit.KiB`, `unit.MiB`, `unit.GiB` and `unit.TiB` keys, missing from the `en` locale since `1.12.0`, are now present.

Full changelog
----------------

See [CHANGELOG.md](CHANGELOG.md) for the exhaustive list of changes in `2.0.0`.
