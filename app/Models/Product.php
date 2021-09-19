<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'title',
        'body',
        'price',
        'framework',
        'version',
        'imagesm',
        'imagebig',
        'is_published',
    ];
    use HasFactory;


    public function Categories()
    {
        return $this->belongsToMany(Category::class);

    }


    public function users()
    {
        return $this->belongsTo(User::class,'user_id');

    }


    public function is_published()
    {
        if ($this->is_published==1){
            return true;
        }else{
            return false;
        }

    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
