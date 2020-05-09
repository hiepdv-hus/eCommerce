const mix = require('laravel-mix');
let webpack = require('webpack');
const Clean = require('clean-webpack-plugin');
const prod = process.env.NODE_ENV === 'production';
const isAdmin = process.env.ENTRY === 'admin';
const publicPath = prod === true ? (!isAdmin ? 'dist' : 'admin/dist') : (!isAdmin ? 'dev' : 'admin/dev');
const relativePath = '../../public/'+publicPath;

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

mix.setPublicPath(relativePath + '/');

if (process.env.ENTRY === 'admin') {
    mix.js('develop/admin/app.js', relativePath + '/js')
        .css('develop/admin/app.scss', relativePath + '/css')
        .version()
    // .disableNotifications()
    ;

}
else {
    mix.js('develop/app.js', relativePath + '/js')
        .css('develop/app.scss', relativePath + '/css')
        .version()
    // .disableNotifications()
    ;
}

// Config to make chunks
mix.webpackConfig({
    plugins: [
        // Clearing public/js file -> bug on laravel-mix when we using version and files are not removed
        new Clean([relativePath + '/js', relativePath + '/css'], { root: path.resolve(__dirname, '..'), verbose: false })
    ],
    output: {
        // Chunks in webpack
        publicPath: '/' + publicPath + '/',
        chunkFilename: !prod ? 'js/[id].bundle.js' : 'js/[id].bundle.[chunkhash].js',
    }
});
