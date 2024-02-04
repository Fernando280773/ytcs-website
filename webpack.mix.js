const mix = require('laravel-mix');

mix.js('resources/js/script.js', 'public/js/script.js')
   .styles('resources/css/default.css', 'public/css/default.css');
  
