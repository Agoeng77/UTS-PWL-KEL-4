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

Route::get('/', function () {
    return view('welcome');});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

//Route::livewire('/', 'home')->name('home');
Route::get('/', \App\Http\Livewire\Home::class)->name('home');

//Route::livewire('/products','product-index')->name("product"); -> old ways

// Route untuk productindex
Route::get('/products', App\Http\Livewire\ProductIndex::class)->name('products');

// Route untuk productcatalog
Route::get('/products/catalog/{categoryId}', App\Http\Livewire\ProductCatalog::class)->name('products.catalog');

// route untuk productdetail
Route::get('/products/{id}', App\Http\Livewire\ProductDetail::class)->name('products.detail');
