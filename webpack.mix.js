const mix = require('laravel-mix');

mix.options({
   processCssUrls: false 
}).setPublicPath('./')
.sourceMaps(true, 'source-map')
.version();

mix.js('./resources/assets/js/admin_home.js','./public/assets/js/admin_home.js')
   .js('./resources/assets/js/_libraries/materialize.min.js','./public/assets/js/_libraries/materialize.min.js')
 .sass('resources/assets/sass/admin_home.scss','public/assets/css');

//mix.js('./resources/assets/js/table_pages.js','./public/assets/js/table_pages.js')
//.sass('resources/assets/sass/table_pages.scss','public/assets/css');



