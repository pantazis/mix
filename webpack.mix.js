const mix = require('laravel-mix');

mix.options({
   processCssUrls: false 
}).sourceMaps(true, 'source-map').version();


mix.js('./resources/assets/js/homepage.js','./public/assets/js/homepage.js');