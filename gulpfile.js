var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
//var paths = {
//    'jquery': './vendor/bower_components/jquery/',
//    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/'
//};
//
//elixir(function(mix) {
////    mix.sass('app.scss');
//    mix.sass("style.scss", 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
//        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
////        .scripts([
////        paths.jquery + “dist/jquery.js”,
////        paths.bootstrap + “javascripts/bootstrap.js”
////        ], ‘public/js/app.js’, ‘./’);
//        .scripts([
//            paths.jquery + "dist/jquery.js",
//            paths.bootstrap + "javascripts/bootstrap.js"
//        ], 'public/js/app.js', './');
//});
//elixir(function(mix) {
//  var bpath = 'node_modules/bootstrap-sass/assets';
//  var jqueryPath = 'resources/assets/vendor/jquery';
//  mix.sass('app.scss')
//      .copy(jqueryPath + '/dist/jquery.min.js', 'public/js')
//      .copy(bpath + '/fonts', 'public/fonts') 
//      .copy(bpath + '/javascripts/bootstrap.min.js', 'public/js');
//});
//elixir(function(mix) { 
//    var bootstrapPath = 'node_modules/bootstrap-sass/assets'; 
//    mix.sass('app.scss') 
//       .copy(bootstrapPath + '/fonts', 'public/fonts') .copy(bootstrapPath + '/javascripts/bootstrap.min.js',
//    'public/js'); 
//}); 
elixir(function(mix) { var bootstrapPath = 'node_modules/bootstrap-sass/assets'; mix.sass('app.scss') .copy(bootstrapPath + '/fonts', 'public/fonts') .copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js'); }); 