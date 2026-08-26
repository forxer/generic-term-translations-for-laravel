@php
/** @var \Laravel\Boost\Install\GuidelineAssist $assist */
@endphp
# Generic Term Translations

- Provides 159 ready-made `en` and `fr` terms across 11 domains (`action`, `back`, `civilities`, `email`, `env`, `errors`, `misc`, `number`, `placeholder`, `status`, `unit`), published into `lang/{locale}/{domain}.php`. Look for an existing key before writing a new label.
- Escape any value you do not control before passing it to a parameterized term: `trans('action.delete_something', ['something' => e($post->title)])`.
- Never edit the published `lang/{locale}/{domain}.php` files: `{{ $assist->artisanCommand('lang:reset') }}` and clean reinstalls overwrite them. Put custom wording in your own translation file instead.
- Feminine variants carry a `_fem` suffix: `misc.all` renders "tous" in French, `misc.all_fem` renders "toutes". Using the masculine key for a feminine subject mistranslates silently.
- IMPORTANT: Activate the `generic-term-translations` skill when looking up, using, publishing, or overriding these terms.
