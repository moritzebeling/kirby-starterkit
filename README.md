# Custom Kirby Starterkit
Quickstart an new website using Kirby CMS on a PHP server

## Kirby
- [Kirby Website](https://getkirby.com)
- [Kirby GitHub](https://github.com/getkirby)
- [Kirby Reference](http://getkirby.com/docs/reference)
- [Kirby Forum](https://forum.getkirby.com)
- [This Starterkit template](https://github.com/moritzebeling/kirby-starterkit)

## License
This is just a custom edit of the official [Kirby Starterkit](https://github.com/getkirby/starterkit). [Buy](https://getkirby.com/buy) a license or read the [agreement](https://getkirby.com/license).

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

## Start
Click `Use this template` to create a new repo from this template, then:
```
git clone --recursive {https://github.com/user/repo.git}
cd {repo}
```
If you need to re-add submodules:
```
git submodule foreach git update --init
```
or
```
git submodule add https://github.com/getkirby/kirby kirby
git submodule add https://github.com/moritzebeling/kirby-cachebusting site/plugins/kirby-cachebusting
git submodule add https://github.com/moritzebeling/kirby-panelmodifications site/plugins/kirby-panelmodifications
git submodule add https://gitlab.com/cre8ivclick/sitemapper.git site/plugins/sitemapper
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

## GoLive Checklist
- Srcset images
- Lazyload images
- OpenGraph meta tags
- JsonLD Schema (structured data testing tool)
- [Google Page Speed](https://developers.google.com/speed/pagespeed/insights)
- Varvy SEO and Speed test
- technical SEO
- is website vulnerable
- https://themeisle.com/blog/website-launch-checklist

## Tools and libs
- [Lazysizes](https://github.com/aFarkas/lazysizes) Lazyloading
- [Hamburgers](https://github.com/jonsuh/hamburgers) Menü
- [Swiper](https://swiperjs.com/api) Slider
- [Stickybits](https://github.com/yowainwright/stickybits)  position:sticky helper
- [SmoothScroll](https://github.com/cferdinandi/smooth-scroll)
- [Svelte](https://svelte.dev) JS Framework
- [Reflex Grid](http://reflexgrid.com/docs) CSS Flex Grid
- [Pagetable](https://github.com/sylvainjule/kirby-pagetable) Kirby Panel section
