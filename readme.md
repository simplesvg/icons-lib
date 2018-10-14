# Default icons collection used by SimpleSVG CDN

A while ago icons data was published to NPM and Packagist, but now with daily updates (unless there is nothing to update) of data repository it became pointless. This package was created to overwrite older icons repository at npmjs and packagist. It will pull latest icons data from GitHub as dependency.

It is not needed if you install icons repository as dependency directly from GitHub repository.


#### Node.js

Run this command to add icons to your project:

```
npm install --save simple-svg-icons
```

This repository will be available in node_modules/simple-svg-icons/
Icons data will be available in node_modules/simple-svg-icons-data/

To resolve filename for any json file, use this:

    const icons = require('simple-svg-icons');

    // returns location of fa.json
    let fa = icons.locate('fa');



#### PHP

Install and initialize Composer project. See documentation at [https://getcomposer.org](https://getcomposer.org)

Then open composer.json and add following code:

```
"require": {
    "simple-svg/icons": "*"
}
```

then run:

```
composer install
```

This repository will be available in vendor/simple-svg/icons/
Icons data will be available in vendor/simple-svg/icons-data/

To resolve filename for any json file, use this:

```
// returns location of fa.json
$fa = \SimpleSVG\Icons\Finder::locate('fa');
```



## License

MIT
