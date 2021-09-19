<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/8/2021
 * Time: 10:50 AM
 */

namespace App\Helpers;


use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function register()
    {

         $this->app->singleton('cart',function (){
             return new CartService();
         });
    }


}