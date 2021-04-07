# WP Tailwind Twig starter theme

This theme is a pared down starting point for new non-gutenberg WordPress projects with a simple template architecture using ACF flexible content fields and twig templates.

## Installation

1. `cd` into your sites wp-content/themes directory
2. Clone this repo
3. Run `composer install && npm install && cp browserSyncConfigExample.json browserSyncConfig.json && npm run build` to install theme dependancies with Composer and NPM
4. If you want to use browsersync, edit the values in browserSyncConfig.json to match your environment
5. In your site, select the theme

## SCSS and JS management

Currently the theme includes a Gulp task runner for managing SCSS and JS compilation/transpilation/compression. However I am intending to update this to a webpack configuration soon.

To run a gulp task that watches for file changes, use `npm run dev`
To run a gulp task that builds out the assets for production, use `npm run build`

## Removing Tailwind CSS

This theme includes Tailwind by default, if you want to remove it follow these steps:

1. Run `npm uninstall tailwindcss` in the theme directory
2. Delete `assets/styles/_tailwind.scss`
3. Delete the tailwind import statement in `assets/styles/style.scss`
4. Delete this line in gulpfile.js: `const tailwindcss = require("tailwindcss");`
5. Delete this line in gulpfile.js: `tailwindcss(), // Tailwind CSS`