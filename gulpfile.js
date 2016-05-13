var gulp = require('gulp');
var elixir = require('laravel-elixir');

require('elixir-jshint');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.production = true;
elixir.config.sourcemaps = false; 

elixir(function(mix) {

      //mix.less('app.less'); Laravel 5 has given us Bootstrap CSS out of the box form less !!

      mix
      .jshint(['resources/assets/'+ 'js/*.js']); // @linting !!!
      .scripts([
           'jquery-1.11.0.js', 'Modernizr-2.8.3.js', 'Bootstrap-3.3.1.js', 'cdv-0.0.1.js'
      ], 
      'public/js/app.js', 
      'resources/assets/js'
      ); // @concatenating !!!
});

