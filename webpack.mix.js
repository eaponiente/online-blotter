const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    // js
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/jsgrid/jsgrid.min.js', 'public/js/jsgrid/jsgrid.min.js')
    .js('resources/js/jsgrid/jsgrid-init.js', 'public/js/jsgrid/jsgrid-init.js')
    .js('resources/js/jsgrid/db.js', 'public/js/jsgrid/db.js')

    // css
    .css('resources/css/jsgrid/jsgrid.min.css', 'public/css/jsgrid/jsgrid.min.css')
    .css('resources/css/jsgrid/jsgrid-theme.min.css', 'public/css/jsgrid/jsgrid-theme.min.css')

    .postCss('resources/css/app.css', 'public/css', [

    ]);
