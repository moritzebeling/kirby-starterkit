# Custom Kirby Starterkit

Quickstart an new website using Kirby CMS on a PHP server

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

To run the page on a PHP server:
```
php -S localhost:8000 kirby/router.php
```

## License

This is a custom edit of the official [Kirby Starterkit](https://github.com/getkirby/starterkit). [Buy](https://getkirby.com/buy) a license or read the [agreement](https://getkirby.com/license).

## Further Reading

- [Kirby Website](https://getkirby.com)
- [Kirby GitHub](https://github.com/getkirby)
- [Kirby Reference](http://getkirby.com/docs/reference)
- [Kirby Forum](https://forum.getkirby.com)
- [This Starterkit template](https://github.com/moritzebeling/kirby-starterkit)
