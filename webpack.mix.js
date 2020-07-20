const mix = require('laravel-mix');
const uglifyJsFunctions = require('./uglify-js-functions');
let combinefiles = uglifyJsFunctions.combinefiles;
let watchChanges = uglifyJsFunctions.watchChanges;
const fileConectionsArr = uglifyJsFunctions.fileConectionsArr;
const createCssFiles  = uglifyJsFunctions.createCssFiles ;
compileJs = process.argv.find(element => element == '--js');



watchChanges(fileConectionsArr);




createCssFiles('public/scss/style.scss', 'public/css');









mix.js('./resources/assets/js/admin_home.js','./public/assets/js/admin_home.js')
   .js('./resources/assets/js/_libraries/materialize.min.js','./public/assets/js/_libraries/materialize.min.js')
 .sass('resources/assets/sass/admin_home.scss','public/assets/css');




