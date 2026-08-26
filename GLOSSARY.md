# Glossary

> 159 terms · 11 domains · en 159/159 · fr 159/159
> Generated file — run `composer glossary` after editing `source/`.

- [Action](#action) — 51 terms
- [Back](#back) — 6 terms
- [Civilities](#civilities) — 4 terms
- [Email](#email) — 4 terms
- [Env](#env) — 6 terms
- [Errors](#errors) — 16 terms
- [Misc](#misc) — 24 terms
- [Number](#number) — 2 terms
- [Placeholder](#placeholder) — 1 term
- [Status](#status) — 22 terms
- [Unit](#unit) — 23 terms

## Action

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `add` | Add | Ajouter | |
| `add_something` | Add :something | Ajouter :something | `:something` |
| `edit` | Edit | Modifier | |
| `edit_something` | Edit :something | Modifier :something | `:something` |
| `show` | Show | Voir | |
| `show_something` | Show :something | Voir :something | `:something` |
| `preview` | Preview | Prévisualiser | |
| `preview_something` | Preview :something | Prévisualiser :something | `:something` |
| `save` | Save | Enregistrer | |
| `save_something` | Save :something | Enregistrer :something | `:something` |
| `save_and_close` | Save & Close | Enregistrer et fermer | |
| `save_and_return` | Save & Return | Enregistrer et retourner | |
| `save_and_new` | Save & New | Enregistrer et nouveau | |
| `enable` | Enable | Activer | |
| `enable_something` | Enable :something | Activer :something | `:something` |
| `disable` | Disable | Désactiver | |
| `disable_something` | Disable :something | Désactiver :something | `:something` |
| `archive` | Archive | Archiver | |
| `archive_something` | Archive :something | Archiver :something | `:something` |
| `unarchive` | Unarchive | Désarchiver | |
| `unarchive_something` | Unarchive :something | Désarchiver :something | `:something` |
| `refresh` | Refresh | Rafraîchir | |
| `refresh_something` | Refresh :something | Rafraîchir :something | `:something` |
| `reload` | Reload | Recharger | |
| `reload_something` | Reload :something | Recharger :something | `:something` |
| `restore` | Restore | Restaurer | |
| `restore_something` | Restore :something | Restaurer :something | `:something` |
| `delete` | Delete | Supprimer | |
| `delete_something` | Delete :something | Supprimer :something | `:something` |
| `cancel` | Cancel | Annuler | |
| `cancel_something` | Cancel :something | Annuler :something | `:something` |
| `duplicate` | Duplicate | Dupliquer | |
| `duplicate_something` | Duplicate :something | Dupliquer :something | `:something` |
| `close` | Close | Fermer | |
| `close_something` | Close :something | Fermer :something | `:something` |
| `see_website` | See website | Voir le site internet | |
| `see_website_address` | See website :address | Voir le site internet :address | `:address` |
| `send` | Send | Envoyer | |
| `send_something` | Send :something | Envoyer :something | `:something` |
| `send_email` | Send an email | Envoyer un email | |
| `send_email_to_address` | Send an email to :address | Envoyer un email à :address | `:address` |
| `call_phone` | Call on phone | Appeler au téléphone | |
| `call_phone_number` | Call on phone the :phone-number | Appeler le :phone-number | `:phone-number` |
| `search` | Search | Rechercher | |
| `copy` | Copy | Copier | |
| `copy_something` | Copy :something | Copier :something | `:something` |
| `browse` | Browse | Parcourir | |
| `up` | Up | Monter | |
| `down` | Down | Descendre | |
| `login` | Login | Connexion | |
| `logout` | Logout | Déconnexion | |

<details>
<summary>Usage examples for parameterized keys</summary>

```php
trans('action.add_something', ['something' => e($something)]);
trans('action.edit_something', ['something' => e($something)]);
trans('action.show_something', ['something' => e($something)]);
trans('action.preview_something', ['something' => e($something)]);
trans('action.save_something', ['something' => e($something)]);
trans('action.enable_something', ['something' => e($something)]);
trans('action.disable_something', ['something' => e($something)]);
trans('action.archive_something', ['something' => e($something)]);
trans('action.unarchive_something', ['something' => e($something)]);
trans('action.refresh_something', ['something' => e($something)]);
trans('action.reload_something', ['something' => e($something)]);
trans('action.restore_something', ['something' => e($something)]);
trans('action.delete_something', ['something' => e($something)]);
trans('action.cancel_something', ['something' => e($something)]);
trans('action.duplicate_something', ['something' => e($something)]);
trans('action.close_something', ['something' => e($something)]);
trans('action.see_website_address', ['address' => e($address)]);
trans('action.send_something', ['something' => e($something)]);
trans('action.send_email_to_address', ['address' => e($address)]);
trans('action.call_phone_number', ['phone-number' => e($phoneNumber)]);
trans('action.copy_something', ['something' => e($something)]);
```

</details>

## Back

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `simple` | back | retour | |
| `home` | back to home | retour à l'accueil | |
| `top` | back to top | retour en haut | |
| `list` | back to the list | retour à la liste | |
| `something` | back to :something | retour :something | `:something` |
| `somethings` | back to :somethings | back to :somethings | `:somethings` |

<details>
<summary>Usage examples for parameterized keys</summary>

```php
trans('back.something', ['something' => e($something)]);
trans('back.somethings', ['somethings' => e($somethings)]);
```

</details>

## Civilities

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `mrs` | Madame | Madame | |
| `mr` | Mister | Monsieur | |
| `mrs_abbr` | Mrs | Mme | |
| `mr_abbr` | Mr. | M. | |

## Email

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `hello` | Hello, | Bonjour, | |
| `cordially` | Cordially, | Cordialement | |
| `automatic` | This is an automatic message. | Ceci est un message automatique. | |
| `do_not_reply` | Please do not answer it, your answer will be lost. | Merci de ne pas y répondre, votre réponse serait perdue. | |

## Env

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `prod` | Production | Production | |
| `staging` | Staging | Staging | |
| `preprod` | Preproduction | Préproduction | |
| `test` | Test | Test | |
| `dev` | Development | Développement | |
| `local` | Local | Local | |

## Errors

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `401_title` | 401 error - Unauthorized | Erreur 401 - Non autorisé | |
| `401_message` | Sorry but an authentication is required to view this document. | Désolé mais une identification est nécessaire pour consulter ce document. | |
| `402_message` | Payment is required to access this content. | Un paiement est requis pour accéder à ce contenu. | |
| `402_title` | 402 error - Payment Required | Erreur 402 - Paiement requis | |
| `403_title` | 403 error - Acces denied | Erreur 403 - Accès refusé | |
| `403_message` | Sorry, but you do not have permission to view this document. | Désolé mais vous n'avez pas l'autorisation de consulter ce document. | |
| `404_title` | 404 error - Document not found | Erreur 404 - Document non trouvé | |
| `404_message` | Sorry but the document you are looking for does not exist. | Désolé mais le document que vous cherchez n'existe pas. | |
| `419_title` | 419 error - Your session has expired | Erreur 419 - Votre session a expiré | |
| `419_message` | Sorry, please login again. | Désolé, veuillez vous identifier à nouveau. | |
| `429_message` | Too many requests. Please try again in a moment. | Trop de requêtes. Veuillez réessayer dans un instant. | |
| `429_title` | 429 error - Too Many Requests | Erreur 429 - Trop de requêtes | |
| `500_title` | 500 error - Internal server error | Erreur 500 - Erreur de serveur interne | |
| `500_message` | The HTTP server encountered an unexpected condition that prevented it from processing the request. | Le serveur HTTP a rencontré une condition inattendue qui l'a empéché de traiter la requête. | |
| `503_title` | Maintenance | Maintenance | |
| `503_message` | Back in a few minutes ... | De retour dans quelques minutes… | |

## Misc

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `yes` | yes | oui | |
| `no` | no | non | |
| `all` | all | tous | |
| `all_fem` | all | toutes | |
| `previous` | previous | précédent | |
| `previous_fem` | previous | précédente | |
| `next` | next | suivant | |
| `next_fem` | next | suivante | |
| `or` | or | ou | |
| `other` | other | autre | |
| `with` | with | avec | |
| `without` | without | sans | |
| `recycle_bin` | recycle bin | corbeille | |
| `recycle_bin_of` | recycle bin of :things | corbeille des :things | `:things` |
| `archives` | archives | archives | |
| `archives_of` | archives of :things | archives des :things | `:things` |
| `required_field` | required field | champs requis | |
| `info_required_fields` | Mandatory fields are indicated by: | Les champs obligatoires sont indiqués par : | |
| `unknown` | unknown | inconnu | |
| `unknown_fem` | unknown | inconnue | |
| `page_n` | Page :number | Page :number | `:number` |
| `developed_by` | Developed by :author | Développé par :author | `:author` |
| `under_maintenance` | under maintenance… | en maintenance… | |
| `quoted` | ":string" | ":string" | `:string` |

<details>
<summary>Usage examples for parameterized keys</summary>

```php
trans('misc.recycle_bin_of', ['things' => e($things)]);
trans('misc.archives_of', ['things' => e($things)]);
trans('misc.page_n', ['number' => e($number)]);
trans('misc.developed_by', ['author' => e($author)]);
trans('misc.quoted', ['string' => e($string)]);
```

</details>

## Number

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `decimals_separator` | . | , | |
| `thousands_separator` | , | `U+00A0` | |

## Placeholder

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `search_placeholder` | Search... | Rechercher... | |

## Status

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `saved` | saved | enregistré | |
| `saved_fem` | saved | enregistrée | |
| `active` | active | actif | |
| `active_fem` | active | active | |
| `inactive` | inactive | inactif | |
| `inactive_fem` | inactive | inactive | |
| `active_inactive` | active and inactive | actif et inactif | |
| `active_inactive_fem` | active and inactive | active et inactive | |
| `only_actives` | only active | actif uniquement | |
| `only_actives_fem` | only active | active uniquement | |
| `only_inactives` | only inactive | inactif uniquement | |
| `only_inactives_fem` | only inactive | inactive uniquement | |
| `enabled` | enabled | activé | |
| `enabled_fem` | enabled | activée | |
| `disabled` | disabled | désactivé | |
| `disabled_fem` | disabled | désactivée | |
| `online` | online | en ligne | |
| `offline` | offline | hors ligne | |
| `info` | Information | Information | |
| `success` | Success | Succès | |
| `warning` | Warning | Avertissement | |
| `error` | Error | Erreur | |

## Unit

| Key | en | fr | Params |
| --- | --- | --- | --- |
| `b` | b | b | |
| `bit` | bit | bit | |
| `bits` | bits | bits | |
| `B` | B | o | |
| `byte` | byte | octet | |
| `bytes` | bytes | octets | |
| `kB` | kB | ko | |
| `MB` | MB | Mo | |
| `GB` | GB | Go | |
| `TB` | TB | To | |
| `KiB` | KiB | Kio | |
| `MiB` | MiB | Mio | |
| `GiB` | GiB | Gio | |
| `TiB` | TiB | Tio | |
| `millimeter` | millimeter | millimètre | |
| `centimeter` | centimeter | centimètre | |
| `meter` | meter | mètre | |
| `kilometer` | kilometer | kilomètre | |
| `gram` | gram | gramme | |
| `kilogram` | kilogram | kilogramme | |
| `milliliter` | milliliter | millilitre | |
| `deciliter` | deciliter | décilitre | |
| `liter` | liter | litre | |
