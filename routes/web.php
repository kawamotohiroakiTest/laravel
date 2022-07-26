<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//ログアウト
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

//記事投稿
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/edit/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::get('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');

//商品
Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'product'])->name('product.product');
Route::get('/category/{id}', [App\Http\Controllers\ProductController::class, 'category'])->name('product.category');
Route::get('/search', [App\Http\Controllers\ProductController::class, 'search'])->name('product.search');
// Route::get('/search?key={key}', [App\Http\Controllers\ProductController::class, 'category'])->name('product.search');

//ユーザー
Route::group(['middleware' => ['auth']], function() {
    Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/user', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
});

//カート
Route::group(['middleware' => ['auth']], function() {
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [App\Http\Controllers\CartController::class, 'indexpost'])->name('cart.index');
    Route::post('/cart/purchase', [App\Http\Controllers\CartController::class, 'purchase'])->name('cart.purchase');
});

//メール
Route::get('sample/mailable/preview', function () {
    return new App\Mail\MailNotification();
  });
// Route::get('sample/mailable/send', [App\Http\Controllers\SampleController::class, 'SampleNotification']);
// Route::get('sample/mailable/send', 'SampleController@SampleNotification');






