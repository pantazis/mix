const mix = require('laravel-mix');

mix.options({
   processCssUrls: false 
}).setPublicPath('./')
.sourceMaps()
.version();

mix.js('./resources/assets/js/homepage.js','./public/assets/js/homepage.js');

mix.sass('resources/assets/sass/home_page.scss','public/assets/css');

