# Custom Kirby Starterkit
Quickstart an new website using Kirby CMS on a PHP server

## Differences from the official Starterkit
- `Kirby` as submodule
- Added plugin for asset cachebusting
- Added plugin to add custom `css` to panel
- Gitignore `.lock` files and `content` folder
- Extended `.htaccess` setup
- Basic `blueprint`
- Basic `config`
- `Languages` enabled and `en` as default
- Sample `collection` and `controller`
- Basic `templates` and `snippets`
- Boilerplate `scss` and `js`

## Kirby
- [Kirby Website](https://getkirby.com)
- [Kirby GitHub](https://github.com/getkirby)
- [Kirby Reference](http://getkirby.com/docs/reference)
- [Kirby Forum](https://forum.getkirby.com)
- [This Starterkit template](https://github.com/moritzebeling/kirby-starterkit)

## Start
Click `Use this template` to create a new repo from this template, then:
```
git clone --recursive {https://github.com/user/repo.git}
cd {repo}
```
If you need to re-add submodules:
```
git submodule add https://github.com/getkirby/kirby kirby
git submodule add https://github.com/moritzebeling/kirby-cachebusting site/plugins/kirby-cachebusting
git submodule add https://github.com/moritzebeling/kirby-panelmodifications site/plugins/kirby-panelmodifications
```
Update submodules
```
git submodule foreach git pull origin master
```
To run the page on a PHP server:
```
php -S localhost:8000 kirby/router.php
```
Compile Sass
```
sass --watch --style=compressed assets/scss:assets/css
```

## License
This is just a custom edit of the official [Kirby Starterkit](https://github.com/getkirby/starterkit). [Buy](https://getkirby.com/buy) a license or read the [agreement](https://getkirby.com/license).

## GoLive Checklist
- Srcset images
- Lazyload images
- OpenGraph meta tags
- JsonLD Schema (structured data testing tool)
- Google Page Speed
- Varvy SEO and Speed test
- technical SEO
- is website vulnerable
- https://themeisle.com/blog/website-launch-checklist
