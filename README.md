# Custom Kirby Starterkit

Quickstart an new website using Kirby CMS on a PHP server.
This starterkit assumes, that you work with some kind of js frontend framework, e.g. Svelte.

## Start

Click `Use this template` to create a new repo from this template, then:
```
# clone
git clone --recursive {github repo url}
cd {repo name}

# init and update submodules
git submodule update --init
git submodule foreach git pull origin master
```

## Development

```
# start local php server
php -S localhost:8000 kirby/router.php

# working on frontend
cd assets/frontend
npm run dev
```

Place your frontend into `assets/frontend` and build to
- `assets/frontend/build/bundle.js`
- `assets/frontend/build/bundle.css`

## License

This is a custom edit of the official [Kirby Starterkit](https://github.com/getkirby/starterkit). [Buy](https://getkirby.com/buy) a license or read the [agreement](https://getkirby.com/license).

## Further Reading

- [Kirby Website](https://getkirby.com)
- [Kirby GitHub](https://github.com/getkirby)
- [Kirby Reference](http://getkirby.com/docs/reference)
- [Kirby Forum](https://forum.getkirby.com)
- [This Starterkit template](https://github.com/moritzebeling/kirby-starterkit)
