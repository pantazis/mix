const mix = require('laravel-mix');

mix.options({
   processCssUrls: false 
});

mix.js('./resources/assets/js/homepage.js','./public/assets/js/homepage.js').sourceMaps(true, 'source-map').version();
