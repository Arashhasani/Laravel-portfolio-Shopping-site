<?php
/**
 * Created by PhpStorm.
 * User: Arash
 * Date: 9/8/2021
 * Time: 10:49 AM
 */

namespace App\Helpers;


use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CartService
{


    protected $cart;

    /**
     * CartService constructor.
     */
    public function __construct()
    {
        $this->cart = session()->get('cart') ?? collect([]);
    }


    /**
     * @param array $value
     * @param $obj
     */
    public function put(array $value, $obj)
    {
        if (!is_null($obj) && $obj instanceof Model) {
            $value = array_merge($value, [
                'id' => Str::random(10),
                'subject_id' => $obj['id'],
                'subject_type' => get_class($obj),
            ]);
        }
        $this->cart->put($value['id'], $value);
//        Cookie::queue('cart',$this->cart->toJson(),10);
//        dd(json_decode(request()->cookie('cart'),true));
        session()->put('cart', $this->cart);

    }

    public function has($key)
    {
        if ($key instanceof Model) {
            return !is_null(
                $this->cart->where('subject_id', $key['id'])->where('subject_type', get_class($key))->first()
            );

        } else {
            return !is_null(
                $this->cart->where('id', $key)->first()
            );
        }

    }

    public function get($key)
    {
        $item = $key instanceof Model ?
            $this->cart->where('subject_id', $key['id'])->where('subject_type', get_class($key))->first()
            :
            $this->cart->where('id', $key)->first();

        return $this->makeProductRelation($item);

    }

    public function all()
    {

        $cart = $this->cart;
        $cart = $cart->map(function ($itme) {
            return $this->makeProductRelation($itme);
        });
        return $cart;

    }

    private function makeProductRelation($item)
    {
        if (isset($item['subject_type']) && isset($item['subject_id'])) {
            $class = $item['subject_type'];
            $product = (new $class())->find($item['subject_id']);

            $item[strtolower(class_basename($class))] = $product;
            return $item;
        } else {
            return $item;
        }
    }

    public function delete(Product $product)
    {

         $this->cart=$this->cart->filter(function ($item) use ($product){
           return $item['subject_id']!= $product['id'] ;
       });
//        Cookie::queue('cart',$this->cart->toJson(),10);
        session()->put('cart',$this->cart);
        return back();


    }

    public function flush()
    {

        $this->cart=session()->flash('cart');
        session()->put('cart',$this->cart);

    }
}