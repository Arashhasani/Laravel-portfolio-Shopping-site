<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $this->seo()->setTitle('Index ...');
        return view('web.index');

    }

    public function products()
    {
        $this->seo()->setTitle('Products ...');


        $products=Product::query()->where('is_published',1)->paginate(6);
        return view('web.products',compact('products'));

    }

    public function singleproduct(Product $product)
    {
        if ($product->is_published()){
            $this->seo()->setTitle($product['title']);

            return view('web.singleproduct',compact('product'));

        }else{
            abort(404);
        }

    }
    //
}
