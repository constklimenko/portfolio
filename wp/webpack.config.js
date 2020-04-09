const path = require('path');


module.exports = {
  entry: './src/index.less',
  output: {
    path: path.resolve(__dirname, 'prod/static/css'),
    filename: 'bundle.css'
  },
  mode: 'development',
  module: {
    rules: [
      {
        test: /\.less$/,
        use: [
          {
            loader: 'style-loader',
          },
          {
            loader: 'css-loader',
          },
          {
            loader: 'less-loader',
            options: {
              lessOptions: {
                strictMath: true,
                noIeCompat: true,
              },
            },
          },
        ],
      },
    ],
  },
};