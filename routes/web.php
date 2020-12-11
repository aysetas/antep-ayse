<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;

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

Route::get('hakkimda', [HomeController::class, 'showUsers']);
Route::get('urunler', [HomeController::class, 'showProducts']);
Route::get('userProduct', [HomeController::class, 'showUSerProducts']);

/*product işlemleri*/
Route::get('create-product', [ProductController::class, 'create'])->name('product.create');
Route::get('save-product', [ProductController::class, 'store'])->name('product.save');
Route::get('export-products', [ProductController::class, 'export'])->name('product.export');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');



/**
 * Slider İşlemleri
 */
Route::get('show-sliders', [SliderController::class, 'index'])->name('slider.index');
Route::get('delete-slider/{id}', [SliderController::class, 'destroy'])->name('delete.slider')->where(array('id' =>'[0-9]+'));

/**
 * Category İşlemleri
 */
Route::get('/index', [HomeController::class, 'showCategory'])->name('product.index');
Route::get('/banner', [HomeController::class,'bannerView'])->name('product.banner');
Route::get('/categorySlider', [HomeController::class,'categorySliderView'])->name('product.category-slider');
Route::get('/laters', [HomeController::class,'laterView'])->name('product.laters');
Route::get('/blogs', [HomeController::class,'blogView'])->name('product.blog');

