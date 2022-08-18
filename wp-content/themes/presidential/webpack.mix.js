// webpack.mix.js

let mix = require('laravel-mix');

// mix.js('assets/scripts/main.js', 'js')
//   .sass('assets/styles/main.scss', "css")
//   .setPublicPath('dist');


// mix.js('assets/scripts/main.js', 'public/js')
//     .postCss('assets/styles/main.css', 'public/css');

mix.js('assets/scripts/main.js', 'public/js')
  .postCss('assets/styles/main.css', 'public/css', [
    require('tailwindcss'),
  ]);

// Add block styling files