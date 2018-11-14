let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.fastSass('resources/assets/scss/app.scss', 'public/assets/css')
   // .js('resources/assets/js/app.js', 'public/assets/js')
   .browserSync({
       proxy: 'localhost:8000',
       files: [
           'app/**/*',
           'public/**/*',
           'resources/views/**/*',
           'resources/templates/**/*',
           'routes/**/*'
       ]
   });
