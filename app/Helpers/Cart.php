<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/8/2021
 * Time: 11:00 AM
 */

namespace App\Helpers;


use Illuminate\Support\Facades\Facade;

class Cart extends Facade
{
    protected static function getFacadeAccessor()
    {
     return 'cart';
    }

}