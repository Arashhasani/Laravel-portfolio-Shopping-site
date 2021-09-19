<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/7/2021
 * Time: 11:19 AM
 */


use Illuminate\Support\Facades\Route;





Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function (){

    Route::get('/','ProductController@index2')->name('admin');
    Route::resource('/users','UserController');
    Route::resource('/products','ProductController');
    Route::resource('/orders' , 'OrderController');

});