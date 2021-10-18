const mix = require('laravel-mix');

require('laravel-mix-copy-watched');

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

mix.browserSync({
    proxy: 'https://gostautoklinika.test'
});

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.pcss', 'public/css', [
        require('postcss-import'),
        require("tailwindcss"),
        require('postcss-nested'),
        require('autoprefixer'),
    ]);

mix.copyWatched('resources/images', 'public/images');
mix.copyWatched('resources/fonts', 'public/fonts');

if (mix.inProduction()) {
    mix.version();
}
