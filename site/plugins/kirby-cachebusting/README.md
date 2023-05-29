# Kirby Cachebusting, CDN friendly

> ⚠️ This is taken from the Kirby website and source code and only here to simplify installation for myself via composer. Plese check:
- https://getkirby.com/docs/cookbook/extensions/kirby-loves-cdn#cache-busting
- https://github.com/getkirby/getkirby.com/blob/main/site/plugins/cdn/src/Cachebuster.php

The plugin adds a fingerprint like `file.css?v=12345678` to every file added from the `/assets` folder using Kirbys helper methods like `css()` or `js()`.

Via the `moritzebeling.kirby-cachebusting.host` option, you can also add an remote host to the file url, e.g. when using a CDN.

## Installation

```
composer require moritzebeling/kirby-cachebusting
composer update moritzebeling/kirby-cachebusting
```

## Setup

```php
# site/config/config.php
return [
    'moritzebeling.kirby-cachebusting' => false // to switch off completely,
    'moritzebeling.kirby-cachebusting.host' => 'https://remote-host.com', // to set remote host, like cdn
    // ...
];
```

## Usage

Just use the `css()` and `js()` helper methods to include your styles and scripts.