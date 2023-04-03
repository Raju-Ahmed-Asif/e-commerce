<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WishlistController;



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
    return view('master');
});
Route::get('/home',[HomeController::class,'home']);

Route::get('/category/list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/form',[CategoryController::class,'form'])->name('category.form');

Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/form',[ProductController::class,'form'])->name('product.form');

Route::get('/brand/list',[BrandController::class,'list'])->name('brand.list');
Route::get('/brand/form',[BrandController::class,'form'])->name('brand.form');

Route::get('/customer/list',[CustomerController::class,'list'])->name('customer.list');
Route::get('/customer/form',[CustomerController::class,'form'])->name('customer.form');

Route::get('/order/list',[OrderController::class,'list'])->name('order.list');
Route::get('/order/form',[OrderController::class,'form'])->name('order.form');

Route::get('/payment/list',[PaymentController::class,'list'])->name('payment.list');
Route::get('/payment/form',[PaymentController::class,'form'])->name('payment.form');

Route::get('/admin/list',[AdminController::class,'list'])->name('admin.list');
Route::get('/admin/form',[AdminController::class,'form'])->name('admin.form');


Route::get('/wishlist/list',[WishlistController::class,'list'])->name('wishlist.list');
Route::get('/wishlist/form',[WishlistController::class,'form'])->name('wishlist.form');