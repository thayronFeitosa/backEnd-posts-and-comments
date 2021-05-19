/* eslint-disable global-require */

const mix = require('laravel-mix')
const path = require('path')

mix
  .vue({ version: 3 })
  .js('resources/js/main.js', 'public/js')
  .sass('resources/sass/main.scss', 'public/css')
  .webpackConfig({
    resolve: {
      alias: {
        '@': path.resolve(__dirname, 'resources/js'),
        '@page': path.resolve(__dirname, 'resources/js/pages'),
        '@component': path.resolve(__dirname, 'resources/js/components'),
        '@style': path.resolve(__dirname, 'resources/sass'),
        '@styleVariables': path.resolve(__dirname, 'resources/sass/_variables.scss'),
      },
    },
    module: {
      rules: [
        {
          test: /\.(js|vue)$/,
          exclude: /node_modules/,
          loader: 'eslint-loader',
          options: {
            formatter: require('eslint-friendly-formatter'),
          },
        },
      ],
    },
  })
