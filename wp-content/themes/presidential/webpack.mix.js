// webpack.mix.js

let mix = require('laravel-mix');

// mix.js('assets/scripts/main.js', 'js')
//   .sass('assets/styles/main.scss', "css")
//   .setPublicPath('dist');


// mix.js('assets/scripts/main.js', 'public/js')
//     .postCss('assets/styles/main.css', 'public/css');

// mix.webpackConfig({
//   stats: {
//       children: true,
//   },
// });

mix.js('assets/scripts/main.js', 'public/js')
  .postCss('assets/styles/main.css', 'public/css', [
    require('tailwindcss'),
  ])
  .options({
    processCssUrls: false,
    stats: {
      children: true
    },
  })
  .copyDirectory('assets/images', 'public/images')
  .copyDirectory('assets/fonts', 'public/fonts');

// Add block styling files
