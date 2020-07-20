const mix = require('laravel-mix');
const uglifyJsFunctions = require('./uglify-js-functions');
let combinefiles = uglifyJsFunctions.combinefiles;
let watchChanges = uglifyJsFunctions.watchChanges;
const fileConectionsArr = uglifyJsFunctions.fileConectionsArr;
const createCssFiles  = uglifyJsFunctions.createCssFiles ;
compileJs = process.argv.find(element => element == '--js');



watchChanges(fileConectionsArr);




createCssFiles('public/scss/style.scss', 'public/css');













