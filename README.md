# Custom Kirby Starterkit

1. Install depenedencies

```
composer install
npm install
```

2. Block content folder

- Add `/content` to .gitignore
- `git rm --cached content -r`

3. Rename `site/config/config.kirby-starterkit.test.php` to match your local hostname

4. Clone [CSS boilerplate](https://github.com/moritzebeling/css-boilerplate)

```
git clone git@github.com:moritzebeling/css-boilerplate.git assets/scss
```

5. Start

```
npm run dev
```