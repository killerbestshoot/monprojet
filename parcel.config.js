module.exports = {
  entry: './resources/js/app.js', // votre point d'entrée de votre application
  output: {
    filename: 'bundle.js', // nom du fichier de sortie
    path: __dirname + '/public/js', // chemin de sortie du fichier
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader', // vous pouvez utiliser babel pour transpiler votre code
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
};

