/*
 * @Author: your name
 * @Date: 2020-03-14 19:04:47
 * @LastEditTime: 2020-03-15 12:35:38
 * @LastEditors: your name
 * @Description: In User Settings Edit
 * @FilePath: \Code\my-L01-app\webpack.mix.js
 */
const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/app.scss', 'public/css').version();
