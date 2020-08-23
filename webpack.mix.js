const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.browserSync('http://localhost:8000/');

// agrega identificador (versionado) a las ccs y js para que el navegador
// lo descarga del servidor cada vez que haya un cambio
// y no cargar esos archivos (css, js) de la cache
// OJO: solo se debe usar para producción
if(mix.inProduction())
{
    mix.version();
}