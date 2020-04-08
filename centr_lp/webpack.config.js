

module.exports = {
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, 'prod/static/js'),
    filename: 'bundle.js'
  }
};