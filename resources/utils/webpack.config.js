const path = require('path');

const config = {
    entry: {
      'main': "./js/main.js"
    },
    mode: 'development',
    output: {
        path: path.join(__dirname, '../../public/dist'),
        filename: 'bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    'loader': 'babel-loader'
                }
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
        ]
    }
}

module.exports = config;
