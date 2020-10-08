const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const HtmlWebpackPlugin = require('html-webpack-plugin');
const CopyPlugin = require('copy-webpack-plugin');

module.exports = {
    entry: {
        app: './src/js/app.js',
    },
    output: {
        path: path.resolve(__dirname, 'dist'),
        filename: '[name].js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: [/node_modules\/(?!(swiper|dom7)\/).*/, /\.test\.jsx?$/],
                use: {
                    loader: 'babel-loader',
                    options: {
                        "presets": [
                            ["@babel/preset-env"]
                        ],
                        plugins: ["syntax-dynamic-import"]
                    }
                }
            },
            {
                test: /\.(handlebars|hbs)$/,
                loader: 'handlebars-loader'
            },
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            comments: true
                        }
                    },
                    {
                        loader: "css-loader",
                    },
                    {
                        loader: "sass-loader"
                    },
                ]
            },
            {
                test: /\.(png|jpe?g|gif|svg)$/,
                use: [
                    {
                        loader: "file-loader",
                        options: {
                        outputPath: 'images'
                        }
                    }
                ]
            },
            {
                test: /\.(woff|woff2|ttf|otf|eot)$/,
                use: [
                    {
                        loader: "file-loader",
                        options: {
                            outputPath: 'fonts'
                        }
                    }
                ]
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].css",            
            removeComments: false
        }),
        new HtmlWebpackPlugin({
            title: 'Blog', 
            filename: 'blog.html',
            template: 'src/html/blog.hbs'
        }),
        new HtmlWebpackPlugin({
            title: 'Home', 
            filename: 'index.html',
            template: 'src/html/index.hbs'
        }),
        new CopyPlugin({
            patterns: [
                { from: './src/images', to: './images' },
            ],
        }),
    ],
    devServer: {
        port: 9000,
        contentBase: path.join(__dirname, 'dist'),
        open: true
    },
    devtool: 'none',
};