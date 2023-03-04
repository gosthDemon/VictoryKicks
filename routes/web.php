<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('home/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', [HomeController::class, "home"])->name('home')->middleware(['auth']);
Route::get('/new_home', [HomeController::class, "new_home"])->name('new_home')->middleware(['auth']);

Route::POST('/save', [ProductController::class, "save"])->name('saveProduct')->middleware(['auth']);
Route::POST('/update', [ProductController::class, "update"])->name('updateProduct')->middleware(['auth']);


Route::get('/products', [ProductController::class, "showProducts"])->name('showProducts')->middleware(['auth']);
Route::get('/printQrCode/{id_product}', [ProductController::class, "printOne"])->name('printOne')->middleware(['auth']);
Route::get('/printAll', [ProductController::class, "printAll"])->name('printAll')->middleware(['auth']);


Route::get('/sale', [ProductController::class, "new_sale"])->name('sale')->middleware(['auth']);
Route::get('/sales', [ProductController::class,"sales"])->name('sales')->middleware(['auth']);
Route::post('/sales/new', [ProductController::class,"sale_save"])->name('sale.save')->middleware(['auth']);

Route::get('/analytics', [ProductController::class,'analytics'])->name('analytics')->middleware(['auth']);
require __DIR__.'/auth.php';
