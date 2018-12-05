module.exports = {
	entry: './assets/js/admin/form-block.js',
	output: {
		path: __dirname,
		filename: 'assets/js/admin/form-block.build.js',
	},
	module: {
		loaders: [
			{
				test: /.js$/,
				loader: 'babel-loader',
				exclude: /node_modules/,
			},
		],
	},
};
