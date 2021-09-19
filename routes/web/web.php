<?php

use Illuminate\Support\Facades\Auth;
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




Route::prefix('/')->namespace('App\Http\Controllers')->group(function (){
    Route::get('/','IndexController@index')->name('index');
   Route::get('/products','IndexController@products')->name('all.products');
   Route::get('/products/{product}','IndexController@singleproduct')->name('single.product');
   Route::post('cart/add/{product}','CartController@addToCart')->name('cart.add');
   Route::delete('cart/delete/{product}','CartController@deleteFromCart')->name('card.delete');


});

Route::middleware('auth')->prefix('/')->namespace('App\Http\Controllers')->group(function (){
   Route::post('payment','PaymentController@payment')->name('cart.payment');
   Route::get('payment/calback','PaymentController@callback')->name('callback.payment');
});

Route::get('/auth/google','App\Http\Controllers\auth\GoogleController@redirect')->name('google.auth');
Route::get('/auth/google/callback','App\Http\Controllers\auth\GoogleController@callback')->name('google.auth.callback');




//
//Route::get('/', function () {
//    return view('web.index');
//})->name('index');
//
//Route::get('/', function () {
//    return view('web.index');
//})->name('index');
//
//
//
//
//Route::get('/token', function () {
//    return view('auth.token');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
