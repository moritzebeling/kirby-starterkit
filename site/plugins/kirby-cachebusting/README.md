# Kirby Cachebusting Plugin, CDN friendly

> ⚠️ This is taken from the Kirby website and source code and only here to simplify installation for myself via composer. Please check:
- https://getkirby.com/docs/cookbook/extensions/kirby-loves-cdn#cache-busting
- https://github.com/getkirby/getkirby.com/blob/main/site/plugins/cdn/src/Cachebuster.php

The plugin adds a fingerprint like `file.css?v=12345678` to every file added from the `/assets` folder using Kirbys helper methods like `css()` or `js()`.

Via the options you can also provide a custom host if you want to host your assets on some CDN,

## Installation

```bash
composer require moritzebeling/kirby-cachebusting
composer update moritzebeling/kirby-cachebusting
```

Or download/clone this repo into `site/plugins` of your Kirby project.

## Config

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

## Development

1. Install a fresh Kirby StarterKit
2. `cd site/plugins`
3. `git clone` this repo

## Support

If you have any ideas for further development or stumble upon any problems, please open an issue or PR. Thank you!

## Warranty

This plugin is work in progress and comes without any warranty. Use at your own risk.