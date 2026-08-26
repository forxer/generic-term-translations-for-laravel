CHANGELOG
=========

2.0.0 UNRELEASED
------------------

- Aligned tooling and dependency constraints with the official [Laravel-Lang translations template](https://github.com/Laravel-Lang/translations-template)
- **BREAKING**: raised the minimum PHP version from `8.1` to `8.4`. Projects running PHP 8.1 to 8.3 should stay on `1.12.0`.
- **BREAKING**: dropped support for `laravel-lang/publisher` `^14.1` and `^15.0`, now requires `^16.0`
- Dropped support for `laravel-lang/status-generator` `^1.19` (a `require-dev` dependency only), now requires `^2.14.0`
- **BREAKING**: renamed `placeholder.search` to `placeholder.search_placeholder`. It collided with `action.search`, which silently received the placeholder wording instead of its own.
- **BREAKING**: renamed `action.see_website_addresss` to `action.see_website_address` and its `:addresss` parameter to `:address`. Both were misspelled with three `s` since `1.9.0`.
- Added automated key consistency tests based on `laravel-lang/status-generator`
- Added a test asserting every `en` locale value matches its source file
- Fixed missing `unit.KiB`, `unit.MiB`, `unit.GiB` and `unit.TiB` keys in the `en` locale
- Fixed 48 `action` values in the `en` locale that no longer matched their source values
- Rewrote the glossary generator as tested classes under `tools/Glossary/`, excluded from the distribution archive. Added the `composer glossary`, `composer test` and `composer lint` scripts.
- Reworked [GLOSSARY.md](GLOSSARY.md) as one table per domain, with a column per locale: every term now shows its translations side by side, in 282 lines instead of 3002.
- Added a test asserting `GLOSSARY.md` matches `source/` and `locales/`, so it can no longer silently drift, and a GitHub Actions workflow running the test suite and the code style check.
- Fixed the glossary usage example of `action.call_phone_number`, which rendered the invalid PHP `e($phone-number)`.
- Fixed the colliding `unit.b` and `unit.B` glossary anchors, which both pointed to the same entry.


1.12.0 (2026-05-05)
-------------------

- Added IEC binary prefix terms for byte sizes:
    - `unit.KiB`
    - `unit.MiB`
    - `unit.GiB`
    - `unit.TiB`


1.11.0 (2026-04-10)
-------------------

- Capitalize first letter of all action translation values (EN & FR)


1.10.0 (2026-03-20)
-------------------

- Added new terms:
    - `errors.402_title`
    - `errors.402_message`
    - `errors.429_title`
    - `errors.429_message`


1.9.1 (2024-10-14)
------------------

- Missing translation 'fr' of `action.send_email_to_address`


1.9.0 (2024-10-13)
------------------

- Added new terms:
    - `action.call_phone`
    - `action.call_phone_number`
    - `action.copy`
    - `action.copy_something`
    - `action.see_website`
    - `action.see_website_addresss`
    - `action.send_email`
    - `action.send_email_to_address`


1.8.1 (2024-08-12)
------------------

- Use UTF-8 No-Break Space character instead of HTML entities in FR


1.8.0 (2024-06-10)
------------------

- Added civilities terms


1.7.0 (2024-06-02)
------------------

- Added `misc.unknown` and `misc.unknown_fem` terms


1.6.0 (2024-02-28)
------------------

- Added some new terms (see glossary)


1.5.0 (2023-12-21)
------------------

- Added support for `laravel-lang/publisher` version 16


1.4.0 (2023-11-25)
------------------

- Added support for `laravel-lang/publisher` version 15


1.3.0 (2023-10-26)
------------------

- Removed support for Laravel 9 and 8 versions for development


1.2.1 (2023-05-10)
------------------

- Change key in misc, replace `required` by `required_field` ; see https://github.com/Laravel-Lang/publisher/issues/329


1.2.0 (2023-05-01)
------------------

- Moved glossary generator from project src to a simpler executable `generate-glossary` file
- Removed useless command
- Update `misc.info_required_fields` strings


1.1.0 (2023-04-03)
------------------

- Added `GLOSSARY.md` file
- Added `GLOSSARY.md` file generator


1.0.3 (2023-04-01)
------------------

- Small fixes


1.0.2 (2023-03-30)
------------------

- Build locales with `laravel-lang/status-generator`


1.0.1 (2023-03-30)
------------------

- Moved `source` and `locales` directories to root package


1.0.0 (2023-03-30)
------------------

- First release
