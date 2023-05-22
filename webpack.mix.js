const mix = require('laravel-mix');
require('mix-tailwindcss');

mix.webpackConfig({
    stats: {
        children: true,
    },
});


mix.sass('sass/app.scss', './../style.css').tailwind('./tailwind.config.js');
mix.options({
    processCssUrls: false
})