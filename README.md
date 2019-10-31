# Custom Kirby Starterkit
Quickstart an new website using Kirby CMS on a PHP server

## Differences from the official Starterkit
- Kirby as submodule
- Gitignore `.lock` files
- Extended `.htaccess` setup
- Added boilerplate scss and `normalize.css`
- Added boilerplate js
- Adjusted `header.php` snippet to already include most important things and hints
- Created 2 config files for local and production
- Added srcset in config
- Added plugin for asset cachebusting
- Added plugin to add custom css to panel
- Simplified user blueprint

## Kirby
- [Kirby GitHub](https://github.com/getkirby)
- [Kirby Website](https://getkirby.com)
- [Kirby Reference](http://getkirby.com/docs/reference)
- [Kirby Forum](https://forum.getkirby.com)
- [This Starterkit template](https://github.com/moritzebeling/kirby-starterkit)

## Start
Click `Use this template` to create a new repo from this template, then:
```
git clone --recursive {https://github.com/user/repo.git}
cd {repo}
```
If you need to re-add kirby as submodule:
```
git submodule add https://github.com/getkirby/kirby kirby
```
To run the page on a PHP server:
```
php -S localhost:8000 kirby/router.php
```

## Setup
- VS Code
- [Live Sass Compiler](https://marketplace.visualstudio.com/items?itemName=ritwickdey.live-sass)
```json
    // VS Code settings.json for Live Sass Compiler
    "liveSassCompile.settings.formats":[
        {
            "format": "compressed",
            "extensionName": ".css"
        }
    ],
    "liveSassCompile.settings.includeItems": [
        "assets/css/**.scss",
        "site/plugins/**/assets/css/**.scss"
    ],
    "liveSassCompile.settings.excludeList": [ 
        "**/node_modules/**",
        ".vscode/**" ,
        "kirby/**"
    ],
    "liveSassCompile.settings.autoprefix": [
        "> 1%",
        "last 2 versions"
    ]
}
```

## License
This is just a custom edit of the official [Kirby Starterkit](https://github.com/getkirby/starterkit). [Buy](https://getkirby.com/buy) a license or read the [agreement](https://getkirby.com/license).