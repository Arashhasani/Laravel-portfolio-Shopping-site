<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Product $product)
    {




        if (!Cart::has($product)){

            Cart::put([

                'quantity' => 1,
                'price' => $product['price'],

            ], $product);

        }

//        return session()->get('cart');
        return redirect(route('single.product',['product'=>$product['id']]));

    }

    public function deleteFromCart(Product $product)
    {

        if (Cart::has($product)){
            return Cart::delete($product);
        }else{
            return false;
        }

    }
    //
}
