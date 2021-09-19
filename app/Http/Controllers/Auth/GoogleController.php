<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    public function redirect()
    {

        return Socialite::driver('google')->redirect();

    }


    public function callback()
    {
        $googleuser=Socialite::driver('google')->user();
        $user=User::where('email',$googleuser['email'])->first();
        if ($user){
            auth()->loginUsingId($user['id']);
        }else{
            $newuser=User::create([
                'email'=>$googleuser['email'],
                'name'=>$googleuser['name'],
                'password'=>bcrypt(Str::random(16)),
            ]);
            auth()->loginUsingId($newuser['id']);
        }

        return redirect(route('profile'));


        
    }
    //
}
