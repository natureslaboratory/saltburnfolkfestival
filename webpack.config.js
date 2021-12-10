const path = require('path');

module.exports = {
    entry: {
        scripts: './src/index.js'
    },
    output: {
        filename: "index.js",
        path: path.resolve(__dirname, "assets", "js")
    },
    watch: true,
    mode: "production",
    module: {
        rules: [
            { 
                test: /\.m?js$/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                        plugins: ['@babel/plugin-proposal-class-properties']
                    }
                }
            }
        ]
    }
}