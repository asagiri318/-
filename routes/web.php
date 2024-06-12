<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;

// ユーザー登録ルート
Route::get('/register', [RegistrationController::class, 'create'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);

// ホームページ
Route::get('/', [ProductController::class, 'index'])->name('home');

// 商品関連のルート
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show')->where('product', '[0-9]+');

// 認証が必要なルート
Route::middleware(['auth'])->group(function () {
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->where('product', '[0-9]+');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->where('product', '[0-9]+');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->where('product', '[0-9]+');

    // ダッシュボードルート
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // プロフィール編集ルート
    Route::get('/profile/edit', function () {
        // ここにプロフィール編集画面のロジックを追加
    })->name('profile.edit');

    // ログアウトルート
    Route::post('/logout', function () {
        auth()->logout(); // ログアウト処理
        return redirect('/'); // ログアウト後にホームページにリダイレクト
    })->name('logout');
});

// 認証用のルート
require __DIR__ . '/auth.php';
