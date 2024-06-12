// Bootstrap などの必要なライブラリをインポート
require('bootstrap');

// Alpine.js のインポート
const Alpine = require('alpinejs');
window.Alpine = Alpine;

// Axios のインポート
const axios = require('axios');
window.axios = axios;

// CSRF トークンの設定
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
const token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found');
}

// Alpine.js の初期化
Alpine.start();
