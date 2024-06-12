const path = require('path');

module.exports = {
    entry: './resources/css/app.css', // CSSファイルのエントリーポイント
    output: {
        filename: 'bundle.js', // 出力ファイル名
        path: path.resolve(__dirname, 'dist'), // 出力ディレクトリ
    },
    module: {
        rules: [
            {
                test: /\.css$/i,
                use: ['style-loader', 'css-loader'],
            },
        ],
    },
};
