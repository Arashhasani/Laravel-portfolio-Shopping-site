<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/6/2021
 * Time: 11:21 AM
 */

use Illuminate\Support\Facades\Route;




Route::prefix('profile')->namespace('App\Http\Controllers\Profile')->group(function (){

   Route::get('/','ProfileController@index')->name('profile');
   Route::get('/user','ProfileController@edit')->name('edit.user');
   Route::post('/user','ProfileController@update')->name('edit.user');
   Route::get('/orders/{order}','ProfileController@order')->name('order');
   Route::get('/orders/{order}/payment','ProfileController@payment')->name('order.payment');
});