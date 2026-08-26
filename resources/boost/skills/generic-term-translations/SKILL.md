---
name: generic-term-translations
description: "Use when looking up, using, publishing, or overriding the generic terms provided by forxer/generic-term-translations-for-laravel. Covers finding an existing key instead of hardcoding a label, parameterized terms and escaping, the `_fem` gender convention, the number separators, and the laravel-lang publisher workflow (`lang:add`, `lang:update`, `lang:reset`, `lang:rm`). Triggers on: trans('action.…'), trans('status.…'), trans('errors.…'), a UI label or button wording, a form placeholder, an HTTP error page, a byte or bit unit, a civility, an environment name, `_fem`, `lang/{locale}/action.php`. Not for application-specific wording, which belongs in your own translation files."
license: MIT
metadata:
  author: forxer
---
# Generic Term Translations

## Documentation

- `vendor/forxer/generic-term-translations-for-laravel/GLOSSARY.md` — every term with its `en` and `fr` value and its parameters, one table per domain. **Read it before inventing a label.**
- `vendor/forxer/generic-term-translations-for-laravel/README.md` — installation and basic usage.
- `vendor/forxer/generic-term-translations-for-laravel/UPGRADE.md` — the `1.x` → `2.0` key renames.

## Domains

Terms are published to `lang/{locale}/{domain}.php` and referenced as `trans('{domain}.{key}')`.

| Domain | Terms | Covers |
|---|---|---|
| `action` | 51 | Verbs for buttons and links: `add`, `edit`, `show`, `delete`, `search`, and their `_something` parameterized variants |
| `back` | 6 | "Back to …" links: `home`, `top`, `list`, `something` |
| `civilities` | 4 | `mrs`, `mr` and their abbreviated forms |
| `email` | 4 | Transactional email wording: `hello`, `cordially`, `automatic`, `do_not_reply` |
| `env` | 6 | Environment names: `prod`, `staging`, `preprod`, `test`, `dev`, `local` |
| `errors` | 16 | HTTP error pages: `401_title` / `401_message`, `402_…`, `403_…`, and so on |
| `misc` | 24 | `yes`, `no`, `all`, `previous`, `next`, plus their `_fem` variants |
| `number` | 2 | `decimals_separator` and `thousands_separator` |
| `placeholder` | 1 | `search_placeholder` for form inputs |
| `status` | 22 | `saved`, `active`, `inactive`, plus their `_fem` variants |
| `unit` | 23 | Byte and bit units, including the IEC binary prefixes `KiB`, `MiB`, `GiB`, `TiB` |

## Basic usage

```php
trans('action.add');            // en: "Add"      fr: "Ajouter"
trans('status.active');         // en: "active"   fr: "actif"
trans('errors.404_title');
```

## Parameterized terms

Keys ending in `_something` (and a few others) take a `:parameter`. The `Params` column of the glossary lists them.

```php
trans('action.add_something', ['something' => 'a post']);
// en: "Add a post"    fr: "Ajouter un article"
```

**Always escape data you do not control.** The term is inserted verbatim into the rendered string:

```php
// Bad — the title reaches the view unescaped
trans('action.delete_something', ['something' => $post->title]);

// Good
trans('action.delete_something', ['something' => e($post->title)]);
```

One parameter is hyphenated and does not map to a PHP variable name directly:

```php
trans('action.call_phone_number', ['phone-number' => e($phoneNumber)]);
```

## Gender variants

French distinguishes feminine and masculine where English does not. The feminine key carries a `_fem` suffix:

```php
trans('misc.all');       // en: "all"    fr: "tous"
trans('misc.all_fem');   // en: "all"    fr: "toutes"

trans('status.saved');       // fr: "enregistré"
trans('status.saved_fem');   // fr: "enregistrée"
```

Both keys return the same English string, so **a wrong choice is invisible in `en` and only surfaces in `fr`**. Pick the variant matching the grammatical gender of the subject the term describes, not the gender of the user.

## Number separators

```php
number_format($value, 2, trans('number.decimals_separator'), trans('number.thousands_separator'));
```

`fr.thousands_separator` is a **non-breaking space (U+00A0)**, not an ASCII space. Do not normalize or trim it, and do not replace it with `&nbsp;` — the raw character is what belongs in the output.

## Publishing workflow

The package is a `--dev` dependency; the translations it publishes into `lang/` are what ship to production.

```bash
php artisan lang:add fr        # first install, per locale
php artisan lang:update        # after upgrading the package — merges, does not replace
php artisan lang:reset         # rebuilds from scratch, DISCARDS local edits
php artisan lang:rm fr         # drops a locale
```

## Overriding a term

Do not edit `lang/{locale}/{domain}.php` — `lang:reset` and clean reinstalls overwrite those files. Define your own key in a separate translation file and use that instead:

```php
// lang/fr/custom.php
return ['delete_account' => 'Supprimer définitivement le compte'];

// usage
trans('custom.delete_account');
```

## Verification

1. The key exists in `GLOSSARY.md` for every locale you support — an untranslated cell shows `—`.
2. Every `:parameter` listed in the glossary's `Params` column is supplied, and any uncontrolled value passes through `e()`.
3. Where a `_fem` variant exists, the chosen key matches the subject's grammatical gender in French.
4. `php artisan lang:update` has been run after upgrading the package.

## Common pitfalls

- **Hardcoding a label that already exists.** Search `GLOSSARY.md` first; 159 terms are already translated.
- **Forgetting `e()` on a parameter.** The value is interpolated as-is; user-controlled data becomes an XSS vector.
- **Using the masculine key for a feminine subject.** It passes review in English and mistranslates in French.
- **Editing the published files.** They are package-managed and get overwritten.
- **Upgrading from `1.x` without reading `UPGRADE.md`.** Two keys were renamed in `2.0` (`placeholder.search` → `placeholder.search_placeholder`, `action.see_website_addresss` → `action.see_website_address`) and neither fails loudly: `lang:update` leaves the orphaned keys in place, so old calls keep resolving until a `lang:reset` removes them.
