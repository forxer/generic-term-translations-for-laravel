# Glossary


[**Action**](#action)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Add](#add)|[Add Something](#add-something)|[Edit](#edit)|[Edit Something](#edit-something)|[Show](#show)|
|[Show Something](#show-something)|[Preview](#preview)|[Preview Something](#preview-something)|[Save](#save)|[Save Something](#save-something)|
|[Save And Close](#save-and-close)|[Save And Return](#save-and-return)|[Save And New](#save-and-new)|[Enable](#enable)|[Enable Something](#enable-something)|
|[Disable](#disable)|[Disable Something](#disable-something)|[Archive](#archive)|[Archive Something](#archive-something)|[Unarchive](#unarchive)|
|[Unarchive Something](#unarchive-something)|[Refresh](#refresh)|[Refresh Something](#refresh-something)|[Reload](#reload)|[Reload Something](#reload-something)|
|[Restore](#restore)|[Restore Something](#restore-something)|[Delete](#delete)|[Delete Something](#delete-something)|[Cancel](#cancel)|
|[Cancel Something](#cancel-something)|[Duplicate](#duplicate)|[Duplicate Something](#duplicate-something)|[Close](#close)|[Close Something](#close-something)|
|[See Website](#see-website)|[See Website Addresss](#see-website-addresss)|[Send](#send)|[Send Something](#send-something)|[Send Email](#send-email)|
|[Send Email To Address](#send-email-to-address)|[Call Phone](#call-phone)|[Call Phone Number](#call-phone-number)|[Search](#search)|[Copy](#copy)|
|[Copy Something](#copy-something)|[Browse](#browse)|[Up](#up)|[Down](#down)|[Login](#login)|
|[Logout](#logout)| | | | |


[**Back**](#back)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Simple](#simple)|[Home](#home)|[Top](#top)|[List](#list)|[Something](#something)|
|[Somethings](#somethings)| | | | |


[**Civilities**](#civilities)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Mrs](#mrs)|[Mr](#mr)|[Mrs Abbr](#mrs-abbr)|[Mr Abbr](#mr-abbr)| |


[**Email**](#email)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Hello](#hello)|[Cordially](#cordially)|[Automatic](#automatic)|[Do Not Reply](#do-not-reply)| |


[**Env**](#env)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Prod](#prod)|[Staging](#staging)|[Preprod](#preprod)|[Test](#test)|[Dev](#dev)|
|[Local](#local)| | | | |


[**Errors**](#errors)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[401 Title](#401-title)|[401 Message](#401-message)|[403 Title](#403-title)|[403 Message](#403-message)|[404 Title](#404-title)|
|[404 Message](#404-message)|[419 Title](#419-title)|[419 Message](#419-message)|[500 Title](#500-title)|[500 Message](#500-message)|
|[503 Title](#503-title)|[503 Message](#503-message)| | | |


[**Misc**](#misc)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Yes](#yes)|[No](#no)|[All](#all)|[All Fem](#all-fem)|[Previous](#previous)|
|[Previous Fem](#previous-fem)|[Next](#next)|[Next Fem](#next-fem)|[Or](#or)|[Other](#other)|
|[With](#with)|[Without](#without)|[Recycle Bin](#recycle-bin)|[Recycle Bin Of](#recycle-bin-of)|[Archives](#archives)|
|[Archives Of](#archives-of)|[Required Field](#required-field)|[Info Required Fields](#info-required-fields)|[Unknown](#unknown)|[Unknown Fem](#unknown-fem)|
|[Page N](#page-n)|[Developed By](#developed-by)|[Under Maintenance](#under-maintenance)|[Quoted](#quoted)| |


[**Number**](#number)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Decimals Separator](#decimals-separator)|[Thousands Separator](#thousands-separator)| | | |


[**Placeholder**](#placeholder)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Search](#search)| | | | |


[**Status**](#status)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[Saved](#saved)|[Saved Fem](#saved-fem)|[Active](#active)|[Active Fem](#active-fem)|[Inactive](#inactive)|
|[Inactive Fem](#inactive-fem)|[Active Inactive](#active-inactive)|[Active Inactive Fem](#active-inactive-fem)|[Only Actives](#only-actives)|[Only Actives Fem](#only-actives-fem)|
|[Only Inactives](#only-inactives)|[Only Inactives Fem](#only-inactives-fem)|[Enabled](#enabled)|[Enabled Fem](#enabled-fem)|[Disabled](#disabled)|
|[Disabled Fem](#disabled-fem)|[Online](#online)|[Offline](#offline)|[Info](#info)|[Success](#success)|
|[Warning](#warning)|[Error](#error)| | | |


[**Unit**](#unit)

|         |         |         |         |         |
| :-----: | :-----: | :-----: | :-----: | :-----: |
|[B](#b)|[Bit](#bit)|[Bits](#bits)|[B](#b)|[Byte](#byte)|
|[Bytes](#bytes)|[Kb](#kb)|[Mb](#mb)|[Gb](#gb)|[Tb](#tb)|
|[Millimeter](#millimeter)|[Centimeter](#centimeter)|[Meter](#meter)|[Kilometer](#kilometer)|[Gram](#gram)|
|[Kilogram](#kilogram)|[Milliliter](#milliliter)|[Deciliter](#deciliter)|[Liter](#liter)| |




## Action

### Add

<details>
<summary>Click for details and usage of Add</summary>

- Key: `'add'`
- Value: `'add'`
- Usage: `'action.add'`

```php
trans('action.add');
```

</details>

[Back to top ^](#glossary)

### Add Something

<details>
<summary>Click for details and usage of Add Something</summary>

- Key: `'add_something'`
- Value: `'add :something'`
- Usage: `'action.add_something'`

```php
trans('action.add_something', [
    'something' => 'something',
]);

trans('action.add_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Edit

<details>
<summary>Click for details and usage of Edit</summary>

- Key: `'edit'`
- Value: `'edit'`
- Usage: `'action.edit'`

```php
trans('action.edit');
```

</details>

[Back to top ^](#glossary)

### Edit Something

<details>
<summary>Click for details and usage of Edit Something</summary>

- Key: `'edit_something'`
- Value: `'edit :something'`
- Usage: `'action.edit_something'`

```php
trans('action.edit_something', [
    'something' => 'something',
]);

trans('action.edit_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Show

<details>
<summary>Click for details and usage of Show</summary>

- Key: `'show'`
- Value: `'show'`
- Usage: `'action.show'`

```php
trans('action.show');
```

</details>

[Back to top ^](#glossary)

### Show Something

<details>
<summary>Click for details and usage of Show Something</summary>

- Key: `'show_something'`
- Value: `'show :something'`
- Usage: `'action.show_something'`

```php
trans('action.show_something', [
    'something' => 'something',
]);

trans('action.show_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Preview

<details>
<summary>Click for details and usage of Preview</summary>

- Key: `'preview'`
- Value: `'preview'`
- Usage: `'action.preview'`

```php
trans('action.preview');
```

</details>

[Back to top ^](#glossary)

### Preview Something

<details>
<summary>Click for details and usage of Preview Something</summary>

- Key: `'preview_something'`
- Value: `'preview :something'`
- Usage: `'action.preview_something'`

```php
trans('action.preview_something', [
    'something' => 'something',
]);

trans('action.preview_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Save

<details>
<summary>Click for details and usage of Save</summary>

- Key: `'save'`
- Value: `'save'`
- Usage: `'action.save'`

```php
trans('action.save');
```

</details>

[Back to top ^](#glossary)

### Save Something

<details>
<summary>Click for details and usage of Save Something</summary>

- Key: `'save_something'`
- Value: `'save :something'`
- Usage: `'action.save_something'`

```php
trans('action.save_something', [
    'something' => 'something',
]);

trans('action.save_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Save And Close

<details>
<summary>Click for details and usage of Save And Close</summary>

- Key: `'save_and_close'`
- Value: `'Save & Close'`
- Usage: `'action.save_and_close'`

```php
trans('action.save_and_close');
```

</details>

[Back to top ^](#glossary)

### Save And Return

<details>
<summary>Click for details and usage of Save And Return</summary>

- Key: `'save_and_return'`
- Value: `'Save & Return'`
- Usage: `'action.save_and_return'`

```php
trans('action.save_and_return');
```

</details>

[Back to top ^](#glossary)

### Save And New

<details>
<summary>Click for details and usage of Save And New</summary>

- Key: `'save_and_new'`
- Value: `'Save & New'`
- Usage: `'action.save_and_new'`

```php
trans('action.save_and_new');
```

</details>

[Back to top ^](#glossary)

### Enable

<details>
<summary>Click for details and usage of Enable</summary>

- Key: `'enable'`
- Value: `'enable'`
- Usage: `'action.enable'`

```php
trans('action.enable');
```

</details>

[Back to top ^](#glossary)

### Enable Something

<details>
<summary>Click for details and usage of Enable Something</summary>

- Key: `'enable_something'`
- Value: `'enable :something'`
- Usage: `'action.enable_something'`

```php
trans('action.enable_something', [
    'something' => 'something',
]);

trans('action.enable_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Disable

<details>
<summary>Click for details and usage of Disable</summary>

- Key: `'disable'`
- Value: `'disable'`
- Usage: `'action.disable'`

```php
trans('action.disable');
```

</details>

[Back to top ^](#glossary)

### Disable Something

<details>
<summary>Click for details and usage of Disable Something</summary>

- Key: `'disable_something'`
- Value: `'disable :something'`
- Usage: `'action.disable_something'`

```php
trans('action.disable_something', [
    'something' => 'something',
]);

trans('action.disable_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Archive

<details>
<summary>Click for details and usage of Archive</summary>

- Key: `'archive'`
- Value: `'archive'`
- Usage: `'action.archive'`

```php
trans('action.archive');
```

</details>

[Back to top ^](#glossary)

### Archive Something

<details>
<summary>Click for details and usage of Archive Something</summary>

- Key: `'archive_something'`
- Value: `'archive :something'`
- Usage: `'action.archive_something'`

```php
trans('action.archive_something', [
    'something' => 'something',
]);

trans('action.archive_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Unarchive

<details>
<summary>Click for details and usage of Unarchive</summary>

- Key: `'unarchive'`
- Value: `'unarchive'`
- Usage: `'action.unarchive'`

```php
trans('action.unarchive');
```

</details>

[Back to top ^](#glossary)

### Unarchive Something

<details>
<summary>Click for details and usage of Unarchive Something</summary>

- Key: `'unarchive_something'`
- Value: `'unarchive :something'`
- Usage: `'action.unarchive_something'`

```php
trans('action.unarchive_something', [
    'something' => 'something',
]);

trans('action.unarchive_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Refresh

<details>
<summary>Click for details and usage of Refresh</summary>

- Key: `'refresh'`
- Value: `'refresh'`
- Usage: `'action.refresh'`

```php
trans('action.refresh');
```

</details>

[Back to top ^](#glossary)

### Refresh Something

<details>
<summary>Click for details and usage of Refresh Something</summary>

- Key: `'refresh_something'`
- Value: `'refresh :something'`
- Usage: `'action.refresh_something'`

```php
trans('action.refresh_something', [
    'something' => 'something',
]);

trans('action.refresh_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Reload

<details>
<summary>Click for details and usage of Reload</summary>

- Key: `'reload'`
- Value: `'reload'`
- Usage: `'action.reload'`

```php
trans('action.reload');
```

</details>

[Back to top ^](#glossary)

### Reload Something

<details>
<summary>Click for details and usage of Reload Something</summary>

- Key: `'reload_something'`
- Value: `'reload :something'`
- Usage: `'action.reload_something'`

```php
trans('action.reload_something', [
    'something' => 'something',
]);

trans('action.reload_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Restore

<details>
<summary>Click for details and usage of Restore</summary>

- Key: `'restore'`
- Value: `'restore'`
- Usage: `'action.restore'`

```php
trans('action.restore');
```

</details>

[Back to top ^](#glossary)

### Restore Something

<details>
<summary>Click for details and usage of Restore Something</summary>

- Key: `'restore_something'`
- Value: `'restore :something'`
- Usage: `'action.restore_something'`

```php
trans('action.restore_something', [
    'something' => 'something',
]);

trans('action.restore_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Delete

<details>
<summary>Click for details and usage of Delete</summary>

- Key: `'delete'`
- Value: `'delete'`
- Usage: `'action.delete'`

```php
trans('action.delete');
```

</details>

[Back to top ^](#glossary)

### Delete Something

<details>
<summary>Click for details and usage of Delete Something</summary>

- Key: `'delete_something'`
- Value: `'delete :something'`
- Usage: `'action.delete_something'`

```php
trans('action.delete_something', [
    'something' => 'something',
]);

trans('action.delete_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Cancel

<details>
<summary>Click for details and usage of Cancel</summary>

- Key: `'cancel'`
- Value: `'cancel'`
- Usage: `'action.cancel'`

```php
trans('action.cancel');
```

</details>

[Back to top ^](#glossary)

### Cancel Something

<details>
<summary>Click for details and usage of Cancel Something</summary>

- Key: `'cancel_something'`
- Value: `'cancel :something'`
- Usage: `'action.cancel_something'`

```php
trans('action.cancel_something', [
    'something' => 'something',
]);

trans('action.cancel_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Duplicate

<details>
<summary>Click for details and usage of Duplicate</summary>

- Key: `'duplicate'`
- Value: `'duplicate'`
- Usage: `'action.duplicate'`

```php
trans('action.duplicate');
```

</details>

[Back to top ^](#glossary)

### Duplicate Something

<details>
<summary>Click for details and usage of Duplicate Something</summary>

- Key: `'duplicate_something'`
- Value: `'duplicate :something'`
- Usage: `'action.duplicate_something'`

```php
trans('action.duplicate_something', [
    'something' => 'something',
]);

trans('action.duplicate_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Close

<details>
<summary>Click for details and usage of Close</summary>

- Key: `'close'`
- Value: `'close'`
- Usage: `'action.close'`

```php
trans('action.close');
```

</details>

[Back to top ^](#glossary)

### Close Something

<details>
<summary>Click for details and usage of Close Something</summary>

- Key: `'close_something'`
- Value: `'close :something'`
- Usage: `'action.close_something'`

```php
trans('action.close_something', [
    'something' => 'something',
]);

trans('action.close_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### See Website

<details>
<summary>Click for details and usage of See Website</summary>

- Key: `'see_website'`
- Value: `'see website'`
- Usage: `'action.see_website'`

```php
trans('action.see_website');
```

</details>

[Back to top ^](#glossary)

### See Website Addresss

<details>
<summary>Click for details and usage of See Website Addresss</summary>

- Key: `'see_website_addresss'`
- Value: `'see website :addresss'`
- Usage: `'action.see_website_addresss'`

```php
trans('action.see_website_addresss', [
    'addresss' => 'addresss',
]);

trans('action.see_website_addresss', [
    'addresss' => e($addresss),
]);
```

</details>

[Back to top ^](#glossary)

### Send

<details>
<summary>Click for details and usage of Send</summary>

- Key: `'send'`
- Value: `'send'`
- Usage: `'action.send'`

```php
trans('action.send');
```

</details>

[Back to top ^](#glossary)

### Send Something

<details>
<summary>Click for details and usage of Send Something</summary>

- Key: `'send_something'`
- Value: `'send :something'`
- Usage: `'action.send_something'`

```php
trans('action.send_something', [
    'something' => 'something',
]);

trans('action.send_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Send Email

<details>
<summary>Click for details and usage of Send Email</summary>

- Key: `'send_email'`
- Value: `'send an email'`
- Usage: `'action.send_email'`

```php
trans('action.send_email');
```

</details>

[Back to top ^](#glossary)

### Send Email To Address

<details>
<summary>Click for details and usage of Send Email To Address</summary>

- Key: `'send_email_to_address'`
- Value: `'send an email to :address'`
- Usage: `'action.send_email_to_address'`

```php
trans('action.send_email_to_address', [
    'address' => 'address',
]);

trans('action.send_email_to_address', [
    'address' => e($address),
]);
```

</details>

[Back to top ^](#glossary)

### Call Phone

<details>
<summary>Click for details and usage of Call Phone</summary>

- Key: `'call_phone'`
- Value: `'call on phone'`
- Usage: `'action.call_phone'`

```php
trans('action.call_phone');
```

</details>

[Back to top ^](#glossary)

### Call Phone Number

<details>
<summary>Click for details and usage of Call Phone Number</summary>

- Key: `'call_phone_number'`
- Value: `'call on phone the :phone-number'`
- Usage: `'action.call_phone_number'`

```php
trans('action.call_phone_number', [
    'phone-number' => 'phone-number',
]);

trans('action.call_phone_number', [
    'phone-number' => e($phone-number),
]);
```

</details>

[Back to top ^](#glossary)

### Search

<details>
<summary>Click for details and usage of Search</summary>

- Key: `'search'`
- Value: `'search'`
- Usage: `'action.search'`

```php
trans('action.search');
```

</details>

[Back to top ^](#glossary)

### Copy

<details>
<summary>Click for details and usage of Copy</summary>

- Key: `'copy'`
- Value: `'copy'`
- Usage: `'action.copy'`

```php
trans('action.copy');
```

</details>

[Back to top ^](#glossary)

### Copy Something

<details>
<summary>Click for details and usage of Copy Something</summary>

- Key: `'copy_something'`
- Value: `'copy :something'`
- Usage: `'action.copy_something'`

```php
trans('action.copy_something', [
    'something' => 'something',
]);

trans('action.copy_something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Browse

<details>
<summary>Click for details and usage of Browse</summary>

- Key: `'browse'`
- Value: `'browse'`
- Usage: `'action.browse'`

```php
trans('action.browse');
```

</details>

[Back to top ^](#glossary)

### Up

<details>
<summary>Click for details and usage of Up</summary>

- Key: `'up'`
- Value: `'up'`
- Usage: `'action.up'`

```php
trans('action.up');
```

</details>

[Back to top ^](#glossary)

### Down

<details>
<summary>Click for details and usage of Down</summary>

- Key: `'down'`
- Value: `'down'`
- Usage: `'action.down'`

```php
trans('action.down');
```

</details>

[Back to top ^](#glossary)

### Login

<details>
<summary>Click for details and usage of Login</summary>

- Key: `'login'`
- Value: `'login'`
- Usage: `'action.login'`

```php
trans('action.login');
```

</details>

[Back to top ^](#glossary)

### Logout

<details>
<summary>Click for details and usage of Logout</summary>

- Key: `'logout'`
- Value: `'logout'`
- Usage: `'action.logout'`

```php
trans('action.logout');
```

</details>

[Back to top ^](#glossary)

## Back

### Simple

<details>
<summary>Click for details and usage of Simple</summary>

- Key: `'simple'`
- Value: `'back'`
- Usage: `'back.simple'`

```php
trans('back.simple');
```

</details>

[Back to top ^](#glossary)

### Home

<details>
<summary>Click for details and usage of Home</summary>

- Key: `'home'`
- Value: `'back to home'`
- Usage: `'back.home'`

```php
trans('back.home');
```

</details>

[Back to top ^](#glossary)

### Top

<details>
<summary>Click for details and usage of Top</summary>

- Key: `'top'`
- Value: `'back to top'`
- Usage: `'back.top'`

```php
trans('back.top');
```

</details>

[Back to top ^](#glossary)

### List

<details>
<summary>Click for details and usage of List</summary>

- Key: `'list'`
- Value: `'back to the list'`
- Usage: `'back.list'`

```php
trans('back.list');
```

</details>

[Back to top ^](#glossary)

### Something

<details>
<summary>Click for details and usage of Something</summary>

- Key: `'something'`
- Value: `'back to :something'`
- Usage: `'back.something'`

```php
trans('back.something', [
    'something' => 'something',
]);

trans('back.something', [
    'something' => e($something),
]);
```

</details>

[Back to top ^](#glossary)

### Somethings

<details>
<summary>Click for details and usage of Somethings</summary>

- Key: `'somethings'`
- Value: `'back to :somethings'`
- Usage: `'back.somethings'`

```php
trans('back.somethings', [
    'somethings' => 'somethings',
]);

trans('back.somethings', [
    'somethings' => e($somethings),
]);
```

</details>

[Back to top ^](#glossary)

## Civilities

### Mrs

<details>
<summary>Click for details and usage of Mrs</summary>

- Key: `'mrs'`
- Value: `'Madame'`
- Usage: `'civilities.mrs'`

```php
trans('civilities.mrs');
```

</details>

[Back to top ^](#glossary)

### Mr

<details>
<summary>Click for details and usage of Mr</summary>

- Key: `'mr'`
- Value: `'Mister'`
- Usage: `'civilities.mr'`

```php
trans('civilities.mr');
```

</details>

[Back to top ^](#glossary)

### Mrs Abbr

<details>
<summary>Click for details and usage of Mrs Abbr</summary>

- Key: `'mrs_abbr'`
- Value: `'Mrs'`
- Usage: `'civilities.mrs_abbr'`

```php
trans('civilities.mrs_abbr');
```

</details>

[Back to top ^](#glossary)

### Mr Abbr

<details>
<summary>Click for details and usage of Mr Abbr</summary>

- Key: `'mr_abbr'`
- Value: `'Mr.'`
- Usage: `'civilities.mr_abbr'`

```php
trans('civilities.mr_abbr');
```

</details>

[Back to top ^](#glossary)

## Email

### Hello

<details>
<summary>Click for details and usage of Hello</summary>

- Key: `'hello'`
- Value: `'Hello,'`
- Usage: `'email.hello'`

```php
trans('email.hello');
```

</details>

[Back to top ^](#glossary)

### Cordially

<details>
<summary>Click for details and usage of Cordially</summary>

- Key: `'cordially'`
- Value: `'Cordially,'`
- Usage: `'email.cordially'`

```php
trans('email.cordially');
```

</details>

[Back to top ^](#glossary)

### Automatic

<details>
<summary>Click for details and usage of Automatic</summary>

- Key: `'automatic'`
- Value: `'This is an automatic message.'`
- Usage: `'email.automatic'`

```php
trans('email.automatic');
```

</details>

[Back to top ^](#glossary)

### Do Not Reply

<details>
<summary>Click for details and usage of Do Not Reply</summary>

- Key: `'do_not_reply'`
- Value: `'Please do not answer it, your answer will be lost.'`
- Usage: `'email.do_not_reply'`

```php
trans('email.do_not_reply');
```

</details>

[Back to top ^](#glossary)

## Env

### Prod

<details>
<summary>Click for details and usage of Prod</summary>

- Key: `'prod'`
- Value: `'Production'`
- Usage: `'env.prod'`

```php
trans('env.prod');
```

</details>

[Back to top ^](#glossary)

### Staging

<details>
<summary>Click for details and usage of Staging</summary>

- Key: `'staging'`
- Value: `'Staging'`
- Usage: `'env.staging'`

```php
trans('env.staging');
```

</details>

[Back to top ^](#glossary)

### Preprod

<details>
<summary>Click for details and usage of Preprod</summary>

- Key: `'preprod'`
- Value: `'Preproduction'`
- Usage: `'env.preprod'`

```php
trans('env.preprod');
```

</details>

[Back to top ^](#glossary)

### Test

<details>
<summary>Click for details and usage of Test</summary>

- Key: `'test'`
- Value: `'Test'`
- Usage: `'env.test'`

```php
trans('env.test');
```

</details>

[Back to top ^](#glossary)

### Dev

<details>
<summary>Click for details and usage of Dev</summary>

- Key: `'dev'`
- Value: `'Development'`
- Usage: `'env.dev'`

```php
trans('env.dev');
```

</details>

[Back to top ^](#glossary)

### Local

<details>
<summary>Click for details and usage of Local</summary>

- Key: `'local'`
- Value: `'Local'`
- Usage: `'env.local'`

```php
trans('env.local');
```

</details>

[Back to top ^](#glossary)

## Errors

### 401 Title

<details>
<summary>Click for details and usage of 401 Title</summary>

- Key: `'401_title'`
- Value: `'401 error - Unauthorized'`
- Usage: `'errors.401_title'`

```php
trans('errors.401_title');
```

</details>

[Back to top ^](#glossary)

### 401 Message

<details>
<summary>Click for details and usage of 401 Message</summary>

- Key: `'401_message'`
- Value: `'Sorry but an authentication is required to view this document.'`
- Usage: `'errors.401_message'`

```php
trans('errors.401_message');
```

</details>

[Back to top ^](#glossary)

### 403 Title

<details>
<summary>Click for details and usage of 403 Title</summary>

- Key: `'403_title'`
- Value: `'403 error - Acces denied'`
- Usage: `'errors.403_title'`

```php
trans('errors.403_title');
```

</details>

[Back to top ^](#glossary)

### 403 Message

<details>
<summary>Click for details and usage of 403 Message</summary>

- Key: `'403_message'`
- Value: `'Sorry, but you do not have permission to view this document.'`
- Usage: `'errors.403_message'`

```php
trans('errors.403_message');
```

</details>

[Back to top ^](#glossary)

### 404 Title

<details>
<summary>Click for details and usage of 404 Title</summary>

- Key: `'404_title'`
- Value: `'404 error - Document not found'`
- Usage: `'errors.404_title'`

```php
trans('errors.404_title');
```

</details>

[Back to top ^](#glossary)

### 404 Message

<details>
<summary>Click for details and usage of 404 Message</summary>

- Key: `'404_message'`
- Value: `'Sorry but the document you are looking for does not exist.'`
- Usage: `'errors.404_message'`

```php
trans('errors.404_message');
```

</details>

[Back to top ^](#glossary)

### 419 Title

<details>
<summary>Click for details and usage of 419 Title</summary>

- Key: `'419_title'`
- Value: `'419 error - Your session has expired'`
- Usage: `'errors.419_title'`

```php
trans('errors.419_title');
```

</details>

[Back to top ^](#glossary)

### 419 Message

<details>
<summary>Click for details and usage of 419 Message</summary>

- Key: `'419_message'`
- Value: `'Sorry, please login again.'`
- Usage: `'errors.419_message'`

```php
trans('errors.419_message');
```

</details>

[Back to top ^](#glossary)

### 500 Title

<details>
<summary>Click for details and usage of 500 Title</summary>

- Key: `'500_title'`
- Value: `'500 error - Internal server error'`
- Usage: `'errors.500_title'`

```php
trans('errors.500_title');
```

</details>

[Back to top ^](#glossary)

### 500 Message

<details>
<summary>Click for details and usage of 500 Message</summary>

- Key: `'500_message'`
- Value: `'The HTTP server encountered an unexpected condition that prevented it from processing the request.'`
- Usage: `'errors.500_message'`

```php
trans('errors.500_message');
```

</details>

[Back to top ^](#glossary)

### 503 Title

<details>
<summary>Click for details and usage of 503 Title</summary>

- Key: `'503_title'`
- Value: `'Maintenance'`
- Usage: `'errors.503_title'`

```php
trans('errors.503_title');
```

</details>

[Back to top ^](#glossary)

### 503 Message

<details>
<summary>Click for details and usage of 503 Message</summary>

- Key: `'503_message'`
- Value: `'Back in a few minutes ...'`
- Usage: `'errors.503_message'`

```php
trans('errors.503_message');
```

</details>

[Back to top ^](#glossary)

## Misc

### Yes

<details>
<summary>Click for details and usage of Yes</summary>

- Key: `'yes'`
- Value: `'yes'`
- Usage: `'misc.yes'`

```php
trans('misc.yes');
```

</details>

[Back to top ^](#glossary)

### No

<details>
<summary>Click for details and usage of No</summary>

- Key: `'no'`
- Value: `'no'`
- Usage: `'misc.no'`

```php
trans('misc.no');
```

</details>

[Back to top ^](#glossary)

### All

<details>
<summary>Click for details and usage of All</summary>

- Key: `'all'`
- Value: `'all'`
- Usage: `'misc.all'`

```php
trans('misc.all');
```

</details>

[Back to top ^](#glossary)

### All Fem

<details>
<summary>Click for details and usage of All Fem</summary>

- Key: `'all_fem'`
- Value: `'all'`
- Usage: `'misc.all_fem'`

```php
trans('misc.all_fem');
```

</details>

[Back to top ^](#glossary)

### Previous

<details>
<summary>Click for details and usage of Previous</summary>

- Key: `'previous'`
- Value: `'previous'`
- Usage: `'misc.previous'`

```php
trans('misc.previous');
```

</details>

[Back to top ^](#glossary)

### Previous Fem

<details>
<summary>Click for details and usage of Previous Fem</summary>

- Key: `'previous_fem'`
- Value: `'previous'`
- Usage: `'misc.previous_fem'`

```php
trans('misc.previous_fem');
```

</details>

[Back to top ^](#glossary)

### Next

<details>
<summary>Click for details and usage of Next</summary>

- Key: `'next'`
- Value: `'next'`
- Usage: `'misc.next'`

```php
trans('misc.next');
```

</details>

[Back to top ^](#glossary)

### Next Fem

<details>
<summary>Click for details and usage of Next Fem</summary>

- Key: `'next_fem'`
- Value: `'next'`
- Usage: `'misc.next_fem'`

```php
trans('misc.next_fem');
```

</details>

[Back to top ^](#glossary)

### Or

<details>
<summary>Click for details and usage of Or</summary>

- Key: `'or'`
- Value: `'or'`
- Usage: `'misc.or'`

```php
trans('misc.or');
```

</details>

[Back to top ^](#glossary)

### Other

<details>
<summary>Click for details and usage of Other</summary>

- Key: `'other'`
- Value: `'other'`
- Usage: `'misc.other'`

```php
trans('misc.other');
```

</details>

[Back to top ^](#glossary)

### With

<details>
<summary>Click for details and usage of With</summary>

- Key: `'with'`
- Value: `'with'`
- Usage: `'misc.with'`

```php
trans('misc.with');
```

</details>

[Back to top ^](#glossary)

### Without

<details>
<summary>Click for details and usage of Without</summary>

- Key: `'without'`
- Value: `'without'`
- Usage: `'misc.without'`

```php
trans('misc.without');
```

</details>

[Back to top ^](#glossary)

### Recycle Bin

<details>
<summary>Click for details and usage of Recycle Bin</summary>

- Key: `'recycle_bin'`
- Value: `'recycle bin'`
- Usage: `'misc.recycle_bin'`

```php
trans('misc.recycle_bin');
```

</details>

[Back to top ^](#glossary)

### Recycle Bin Of

<details>
<summary>Click for details and usage of Recycle Bin Of</summary>

- Key: `'recycle_bin_of'`
- Value: `'recycle bin of :things'`
- Usage: `'misc.recycle_bin_of'`

```php
trans('misc.recycle_bin_of', [
    'things' => 'things',
]);

trans('misc.recycle_bin_of', [
    'things' => e($things),
]);
```

</details>

[Back to top ^](#glossary)

### Archives

<details>
<summary>Click for details and usage of Archives</summary>

- Key: `'archives'`
- Value: `'archives'`
- Usage: `'misc.archives'`

```php
trans('misc.archives');
```

</details>

[Back to top ^](#glossary)

### Archives Of

<details>
<summary>Click for details and usage of Archives Of</summary>

- Key: `'archives_of'`
- Value: `'archives of :things'`
- Usage: `'misc.archives_of'`

```php
trans('misc.archives_of', [
    'things' => 'things',
]);

trans('misc.archives_of', [
    'things' => e($things),
]);
```

</details>

[Back to top ^](#glossary)

### Required Field

<details>
<summary>Click for details and usage of Required Field</summary>

- Key: `'required_field'`
- Value: `'required field'`
- Usage: `'misc.required_field'`

```php
trans('misc.required_field');
```

</details>

[Back to top ^](#glossary)

### Info Required Fields

<details>
<summary>Click for details and usage of Info Required Fields</summary>

- Key: `'info_required_fields'`
- Value: `'Mandatory fields are indicated by:'`
- Usage: `'misc.info_required_fields'`

```php
trans('misc.info_required_fields');
```

</details>

[Back to top ^](#glossary)

### Unknown

<details>
<summary>Click for details and usage of Unknown</summary>

- Key: `'unknown'`
- Value: `'unknown'`
- Usage: `'misc.unknown'`

```php
trans('misc.unknown');
```

</details>

[Back to top ^](#glossary)

### Unknown Fem

<details>
<summary>Click for details and usage of Unknown Fem</summary>

- Key: `'unknown_fem'`
- Value: `'unknown'`
- Usage: `'misc.unknown_fem'`

```php
trans('misc.unknown_fem');
```

</details>

[Back to top ^](#glossary)

### Page N

<details>
<summary>Click for details and usage of Page N</summary>

- Key: `'page_n'`
- Value: `'Page :number'`
- Usage: `'misc.page_n'`

```php
trans('misc.page_n', [
    'number' => 'number',
]);

trans('misc.page_n', [
    'number' => e($number),
]);
```

</details>

[Back to top ^](#glossary)

### Developed By

<details>
<summary>Click for details and usage of Developed By</summary>

- Key: `'developed_by'`
- Value: `'Developed by :author'`
- Usage: `'misc.developed_by'`

```php
trans('misc.developed_by', [
    'author' => 'author',
]);

trans('misc.developed_by', [
    'author' => e($author),
]);
```

</details>

[Back to top ^](#glossary)

### Under Maintenance

<details>
<summary>Click for details and usage of Under Maintenance</summary>

- Key: `'under_maintenance'`
- Value: `'under maintenance…'`
- Usage: `'misc.under_maintenance'`

```php
trans('misc.under_maintenance');
```

</details>

[Back to top ^](#glossary)

### Quoted

<details>
<summary>Click for details and usage of Quoted</summary>

- Key: `'quoted'`
- Value: `'":string"'`
- Usage: `'misc.quoted'`

```php
trans('misc.quoted', [
    'string' => 'string',
]);

trans('misc.quoted', [
    'string' => e($string),
]);
```

</details>

[Back to top ^](#glossary)

## Number

### Decimals Separator

<details>
<summary>Click for details and usage of Decimals Separator</summary>

- Key: `'decimals_separator'`
- Value: `'.'`
- Usage: `'number.decimals_separator'`

```php
trans('number.decimals_separator');
```

</details>

[Back to top ^](#glossary)

### Thousands Separator

<details>
<summary>Click for details and usage of Thousands Separator</summary>

- Key: `'thousands_separator'`
- Value: `','`
- Usage: `'number.thousands_separator'`

```php
trans('number.thousands_separator');
```

</details>

[Back to top ^](#glossary)

## Placeholder

### Search

<details>
<summary>Click for details and usage of Search</summary>

- Key: `'search'`
- Value: `'Search...'`
- Usage: `'placeholder.search'`

```php
trans('placeholder.search');
```

</details>

[Back to top ^](#glossary)

## Status

### Saved

<details>
<summary>Click for details and usage of Saved</summary>

- Key: `'saved'`
- Value: `'saved'`
- Usage: `'status.saved'`

```php
trans('status.saved');
```

</details>

[Back to top ^](#glossary)

### Saved Fem

<details>
<summary>Click for details and usage of Saved Fem</summary>

- Key: `'saved_fem'`
- Value: `'saved'`
- Usage: `'status.saved_fem'`

```php
trans('status.saved_fem');
```

</details>

[Back to top ^](#glossary)

### Active

<details>
<summary>Click for details and usage of Active</summary>

- Key: `'active'`
- Value: `'active'`
- Usage: `'status.active'`

```php
trans('status.active');
```

</details>

[Back to top ^](#glossary)

### Active Fem

<details>
<summary>Click for details and usage of Active Fem</summary>

- Key: `'active_fem'`
- Value: `'active'`
- Usage: `'status.active_fem'`

```php
trans('status.active_fem');
```

</details>

[Back to top ^](#glossary)

### Inactive

<details>
<summary>Click for details and usage of Inactive</summary>

- Key: `'inactive'`
- Value: `'inactive'`
- Usage: `'status.inactive'`

```php
trans('status.inactive');
```

</details>

[Back to top ^](#glossary)

### Inactive Fem

<details>
<summary>Click for details and usage of Inactive Fem</summary>

- Key: `'inactive_fem'`
- Value: `'inactive'`
- Usage: `'status.inactive_fem'`

```php
trans('status.inactive_fem');
```

</details>

[Back to top ^](#glossary)

### Active Inactive

<details>
<summary>Click for details and usage of Active Inactive</summary>

- Key: `'active_inactive'`
- Value: `'active and inactive'`
- Usage: `'status.active_inactive'`

```php
trans('status.active_inactive');
```

</details>

[Back to top ^](#glossary)

### Active Inactive Fem

<details>
<summary>Click for details and usage of Active Inactive Fem</summary>

- Key: `'active_inactive_fem'`
- Value: `'active and inactive'`
- Usage: `'status.active_inactive_fem'`

```php
trans('status.active_inactive_fem');
```

</details>

[Back to top ^](#glossary)

### Only Actives

<details>
<summary>Click for details and usage of Only Actives</summary>

- Key: `'only_actives'`
- Value: `'only active'`
- Usage: `'status.only_actives'`

```php
trans('status.only_actives');
```

</details>

[Back to top ^](#glossary)

### Only Actives Fem

<details>
<summary>Click for details and usage of Only Actives Fem</summary>

- Key: `'only_actives_fem'`
- Value: `'only active'`
- Usage: `'status.only_actives_fem'`

```php
trans('status.only_actives_fem');
```

</details>

[Back to top ^](#glossary)

### Only Inactives

<details>
<summary>Click for details and usage of Only Inactives</summary>

- Key: `'only_inactives'`
- Value: `'only inactive'`
- Usage: `'status.only_inactives'`

```php
trans('status.only_inactives');
```

</details>

[Back to top ^](#glossary)

### Only Inactives Fem

<details>
<summary>Click for details and usage of Only Inactives Fem</summary>

- Key: `'only_inactives_fem'`
- Value: `'only inactive'`
- Usage: `'status.only_inactives_fem'`

```php
trans('status.only_inactives_fem');
```

</details>

[Back to top ^](#glossary)

### Enabled

<details>
<summary>Click for details and usage of Enabled</summary>

- Key: `'enabled'`
- Value: `'enabled'`
- Usage: `'status.enabled'`

```php
trans('status.enabled');
```

</details>

[Back to top ^](#glossary)

### Enabled Fem

<details>
<summary>Click for details and usage of Enabled Fem</summary>

- Key: `'enabled_fem'`
- Value: `'enabled'`
- Usage: `'status.enabled_fem'`

```php
trans('status.enabled_fem');
```

</details>

[Back to top ^](#glossary)

### Disabled

<details>
<summary>Click for details and usage of Disabled</summary>

- Key: `'disabled'`
- Value: `'disabled'`
- Usage: `'status.disabled'`

```php
trans('status.disabled');
```

</details>

[Back to top ^](#glossary)

### Disabled Fem

<details>
<summary>Click for details and usage of Disabled Fem</summary>

- Key: `'disabled_fem'`
- Value: `'disabled'`
- Usage: `'status.disabled_fem'`

```php
trans('status.disabled_fem');
```

</details>

[Back to top ^](#glossary)

### Online

<details>
<summary>Click for details and usage of Online</summary>

- Key: `'online'`
- Value: `'online'`
- Usage: `'status.online'`

```php
trans('status.online');
```

</details>

[Back to top ^](#glossary)

### Offline

<details>
<summary>Click for details and usage of Offline</summary>

- Key: `'offline'`
- Value: `'offline'`
- Usage: `'status.offline'`

```php
trans('status.offline');
```

</details>

[Back to top ^](#glossary)

### Info

<details>
<summary>Click for details and usage of Info</summary>

- Key: `'info'`
- Value: `'Information'`
- Usage: `'status.info'`

```php
trans('status.info');
```

</details>

[Back to top ^](#glossary)

### Success

<details>
<summary>Click for details and usage of Success</summary>

- Key: `'success'`
- Value: `'Success'`
- Usage: `'status.success'`

```php
trans('status.success');
```

</details>

[Back to top ^](#glossary)

### Warning

<details>
<summary>Click for details and usage of Warning</summary>

- Key: `'warning'`
- Value: `'Warning'`
- Usage: `'status.warning'`

```php
trans('status.warning');
```

</details>

[Back to top ^](#glossary)

### Error

<details>
<summary>Click for details and usage of Error</summary>

- Key: `'error'`
- Value: `'Error'`
- Usage: `'status.error'`

```php
trans('status.error');
```

</details>

[Back to top ^](#glossary)

## Unit

### B

<details>
<summary>Click for details and usage of B</summary>

- Key: `'b'`
- Value: `'b'`
- Usage: `'unit.b'`

```php
trans('unit.b');
```

</details>

[Back to top ^](#glossary)

### Bit

<details>
<summary>Click for details and usage of Bit</summary>

- Key: `'bit'`
- Value: `'bit'`
- Usage: `'unit.bit'`

```php
trans('unit.bit');
```

</details>

[Back to top ^](#glossary)

### Bits

<details>
<summary>Click for details and usage of Bits</summary>

- Key: `'bits'`
- Value: `'bits'`
- Usage: `'unit.bits'`

```php
trans('unit.bits');
```

</details>

[Back to top ^](#glossary)

### B

<details>
<summary>Click for details and usage of B</summary>

- Key: `'B'`
- Value: `'B'`
- Usage: `'unit.B'`

```php
trans('unit.B');
```

</details>

[Back to top ^](#glossary)

### Byte

<details>
<summary>Click for details and usage of Byte</summary>

- Key: `'byte'`
- Value: `'byte'`
- Usage: `'unit.byte'`

```php
trans('unit.byte');
```

</details>

[Back to top ^](#glossary)

### Bytes

<details>
<summary>Click for details and usage of Bytes</summary>

- Key: `'bytes'`
- Value: `'bytes'`
- Usage: `'unit.bytes'`

```php
trans('unit.bytes');
```

</details>

[Back to top ^](#glossary)

### Kb

<details>
<summary>Click for details and usage of Kb</summary>

- Key: `'kB'`
- Value: `'kB'`
- Usage: `'unit.kB'`

```php
trans('unit.kB');
```

</details>

[Back to top ^](#glossary)

### Mb

<details>
<summary>Click for details and usage of Mb</summary>

- Key: `'MB'`
- Value: `'MB'`
- Usage: `'unit.MB'`

```php
trans('unit.MB');
```

</details>

[Back to top ^](#glossary)

### Gb

<details>
<summary>Click for details and usage of Gb</summary>

- Key: `'GB'`
- Value: `'GB'`
- Usage: `'unit.GB'`

```php
trans('unit.GB');
```

</details>

[Back to top ^](#glossary)

### Tb

<details>
<summary>Click for details and usage of Tb</summary>

- Key: `'TB'`
- Value: `'TB'`
- Usage: `'unit.TB'`

```php
trans('unit.TB');
```

</details>

[Back to top ^](#glossary)

### Millimeter

<details>
<summary>Click for details and usage of Millimeter</summary>

- Key: `'millimeter'`
- Value: `'millimeter'`
- Usage: `'unit.millimeter'`

```php
trans('unit.millimeter');
```

</details>

[Back to top ^](#glossary)

### Centimeter

<details>
<summary>Click for details and usage of Centimeter</summary>

- Key: `'centimeter'`
- Value: `'centimeter'`
- Usage: `'unit.centimeter'`

```php
trans('unit.centimeter');
```

</details>

[Back to top ^](#glossary)

### Meter

<details>
<summary>Click for details and usage of Meter</summary>

- Key: `'meter'`
- Value: `'meter'`
- Usage: `'unit.meter'`

```php
trans('unit.meter');
```

</details>

[Back to top ^](#glossary)

### Kilometer

<details>
<summary>Click for details and usage of Kilometer</summary>

- Key: `'kilometer'`
- Value: `'kilometer'`
- Usage: `'unit.kilometer'`

```php
trans('unit.kilometer');
```

</details>

[Back to top ^](#glossary)

### Gram

<details>
<summary>Click for details and usage of Gram</summary>

- Key: `'gram'`
- Value: `'gram'`
- Usage: `'unit.gram'`

```php
trans('unit.gram');
```

</details>

[Back to top ^](#glossary)

### Kilogram

<details>
<summary>Click for details and usage of Kilogram</summary>

- Key: `'kilogram'`
- Value: `'kilogram'`
- Usage: `'unit.kilogram'`

```php
trans('unit.kilogram');
```

</details>

[Back to top ^](#glossary)

### Milliliter

<details>
<summary>Click for details and usage of Milliliter</summary>

- Key: `'milliliter'`
- Value: `'milliliter'`
- Usage: `'unit.milliliter'`

```php
trans('unit.milliliter');
```

</details>

[Back to top ^](#glossary)

### Deciliter

<details>
<summary>Click for details and usage of Deciliter</summary>

- Key: `'deciliter'`
- Value: `'deciliter'`
- Usage: `'unit.deciliter'`

```php
trans('unit.deciliter');
```

</details>

[Back to top ^](#glossary)

### Liter

<details>
<summary>Click for details and usage of Liter</summary>

- Key: `'liter'`
- Value: `'liter'`
- Usage: `'unit.liter'`

```php
trans('unit.liter');
```

</details>

[Back to top ^](#glossary)

