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

mix.js(['resources/js/app.js',
 'resources/js/osahan.js',
 'resources/js/nav.js',



], 'public/js')
 
 
   mix.js(['resources/js/vue.js',


], 'public/js/vue.js')
   .vue()

    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

