const mix = require('laravel-mix');

mix.options({
   processCssUrls: false 
}).setPublicPath('./')
.sourceMaps()
.version();

mix.js('./resources/assets/js/homepage.js','./public/assets/js/homepage.js');


mix.sass('public/scss/home_page.scss', 'public/css');

