<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ChartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('backend.master');
});
// Route::get('/product', function () {
//     return view('backend.product.index');
// });


//route product store
// Route::post('/product', [ProductController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::middleware(['auth'])->group(function () {
//     Route::resource('categori', CategoriController::class);
//     Route::resource('product', ProductController::class);
// });
// Route::group(['middleware' => ['auth']], function () {
//     Route::resource('categori', CategoriController::class);
//     Route::resource('product', ProductController::class);
// });
// Route::get('product', [ProductController::class, 'index'])->name('product.index');
// Route::get('product/{product}', [ProductController::class, 'show'])->name('product.show');

Route::resource('categori', CategoriController::class);
    Route::resource('product', ProductController::class);
    Route::resource('order-item', OrderItemController::class);

    

Route::post('backend/keranjang/add_cart', [ChartController::class, 'addCart'])->name('backend.keranjang.add_cart');