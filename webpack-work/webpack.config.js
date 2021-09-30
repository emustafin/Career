const path = require('path');
const webpack = require('webpack');
const autoprefixer = require('autoprefixer');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const HTMLWebpackPlugin = require('html-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const TerserWebpackPlugin = require('terser-webpack-plugin');

const isDev = process.env.NODE_ENV === 'development';
const isProd = !isDev;

const optimization = () => {
  const config = {};
  if (isProd) {
    config.minimizer = [new CssMinimizerPlugin(), new TerserWebpackPlugin()];
  }
  return config;
};

const excludeSourceMap = () => {
  if (isProd) {
    return 'bundle.js';
  }
};

module.exports = {
  mode: 'development',
  context: path.resolve(__dirname, 'src'),
  entry: {
    main: ['@babel/polyfill', './js/index.js', './styles/styles.scss'],
  },
  output: {
    filename: 'bundle.js',
    // path: path.resolve(__dirname, 'dist'),
    path: path.resolve(__dirname, '../assets'),
  },
  plugins: [
    // new CleanWebpackPlugin(),
    new HTMLWebpackPlugin({
      filename: 'index.html',
      template: './index.html',
    }),
    new HTMLWebpackPlugin({
      filename: 'listing.html',
      template: './listing.html',
    }),
    new HTMLWebpackPlugin({
      filename: 'politics.html',
      template: './politics.html',
    }),
    new HTMLWebpackPlugin({
      filename: 'partial.html',
      template: './partial.html',
    }),
    new HTMLWebpackPlugin({
      filename: 'vacancy-direct-link.html',
      template: './vacancy-direct-link.html',
    }),
    new HTMLWebpackPlugin({
      filename: 'listing-metro.html',
      template: './listing-metro.html',
    }),
    new HTMLWebpackPlugin({
      filename: 'retail-main.html',
      template: './retail-main.html',
    }),
    new MiniCssExtractPlugin({
      filename: 'styles/styles.css',
    }),
    new webpack.LoaderOptionsPlugin({
      options: {
        postcss: [autoprefixer()],
      },
    }),
    new webpack.SourceMapDevToolPlugin({
      filename: '[file].map',
      exclude: excludeSourceMap(),
    }),
  ],
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/,
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: 'css-loader',
            options: {
              sourceMap: true,
              url: false,
              import: true,
            },
          },
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.(png|jpg|svg|gif)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[path][name].[ext]',
            },
          },
        ],
      },
      {
        test: /\.(ttf|woff|woff2)$/,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: '[path][name].[ext]',
            },
          },
        ],
      },
      {
        test: /\.m?js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
  optimization: optimization(),
  devServer: {
    contentBase: path.resolve(__dirname, 'dist'),
    port: 3080,
    open: true,
  },
};
