var path = require('path');
var webpack = require('webpack');
module.exports = {
  entry: './js/app.js',
  output: {
    path: path.resolve(__dirname, 'js'),
    filename: 'reactchat.js'
  },
  module: {
    loaders: [{
      test: /\.jsx?$/,
      loader: 'babel-loader',
      query:
      {
        presets: ['es2015', 'react']
      }
    }]
  },
  stats: {
    colors: true
  },
  devtool: 'source-map'
};